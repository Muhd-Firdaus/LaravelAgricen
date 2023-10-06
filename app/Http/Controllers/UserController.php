<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);
        if(auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        // dd(auth::attempt($credentials));
        return Redirect::back()->withErrors(['msg' => 'Anda telah mengisi email atau kata laluan yang salah <br> You have entered an invalid email or password']);
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'email'      => 'bail|required|max:100',
                'name'      => 'bail|required|max:100',
                'ic'      => 'bail|required|max:12',
                'password'   => 'bail|required|max:100|min:8',
               ];
                $this->validate($request, $rules);
                $user = new User();
                $user->email = $request->email;
                $user->name = $request->name;
                $user->ic = $request->ic;
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect('/login');
        }catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        }catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == '23505'){
                return Redirect::back()->withErrors(['msg' => 'IC or email already registered!']);
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function profile()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        try {
            $user = User::findOrFail(auth()->user()->id);
            $validatedData = $request->validate([
                'email'      => 'required|max:100',
                'name'      => 'required|max:100',
                'ic'      => 'required|max:12',
                'phone'   => 'nullable|max:15|min:7',
            ]);          

            $user->update($validatedData);
                
            return redirect('/profile')->with('success', 'User updated successfully.');
        }catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        }catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == '23505'){
                return redirect('/profile')->withErrors(['msg' => 'Duplicate Record Detected!']);
            }
            // Handle other exceptions (e.g., database errors) here
            return redirect('/profile')->withErrors(['msg' => 'User update unsuccessful!']);
        }
    }
}
