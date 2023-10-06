<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class BorangController extends Controller
{
    public function insert_AC1(Request $request){
        try{
            $rules = [
                'email'      => 'bail|required|max:100',
            ];
            $this->validate($request, $rules);
            
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
}
