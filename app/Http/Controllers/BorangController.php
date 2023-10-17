<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class BorangController extends Controller
{
    public function insert_AC1(Request $request){
        try{
            $rules = [
                'R' => 'bail|required|max:2',
                'NG' => 'bail|required|max:2',
                'DP' => 'bail|required|max:2',
                'DB' => 'bail|required|max:2',
                'BP' => 'bail|required|max:2',
                'TK' => 'bail|required|max:2',
                'IR' => 'bail|required|max:2',
                'JIR' => 'bail|required|max:2',
                'JAIR' => 'bail|required|max:2',
                'JAIRP' => 'bail|required|max:2',
                'ac1_001101' => 'bail|required|max:10',
                'ac1_001102' => 'bail|required|max:10',
                'ac1_001103' => 'bail|required|max:10',
                'ac1_001104' => 'bail|required|max:100',
                'ac1_001105' => 'bail|required|max:100',
                'ac1_001106' => 'bail|required|max:100',
                'ac1_001107' => 'bail|required|max:100',
                'ac1_001108' => 'bail|required|max:50',
                'ac1_001109' => 'bail|required|max:10',
                'ac1_001111' => 'bail|required|max:100',
                'ac1_001113' => 'bail|required|max:15',
                'ac1_001119' => 'bail|required|date',
                'ac1_catatan' => 'bail|required|max:100',
                'ac1' => 'bail|required|array',
                'ac1.*.0100' => 'bail|required|max:100',
                'ac1.*.0101' => 'bail|required|max:15',
                'ac1.*.0102' => 'bail|required|max:2',
                'ac1.*.0103' => 'bail|required||max:2',
                'ac1.*.0104' => 'bail|required||max:2',
                'ac1.*.0105' => 'bail|required||max:2',
                'ac1.*.0106' => 'bail|required||max:2',
                'ac1.*.0107' => 'bail|required||max:2',
                'ac1.*.0108' => 'bail|required||max:2',
                'ac1.*.0109' => 'bail|required||max:2',
                'ac1.*.0110' => 'bail|required||max:2',
                'ac1.*.0200' => 'bail|required||max:2',
                'ac1.*.0201' => 'bail|required||max:2',
                'ac1.*.0202' => 'bail|required||max:2',
                'ac1.*.0203' => 'bail|required||max:2',
                'ac1.*.0204' => 'bail|required||max:2',
                'ac1.*.0205' => 'bail|required||max:2',
                'ac1.*.0300' => 'bail|required||max:2',
                'ac1.*.0301' => 'bail|required||max:2',
                'ac1.*.0302' => 'bail|required||max:2',
                'ac1.*.0303' => 'bail|required||max:2',
                'ac1.*.0400' => 'bail|required||max:2',
                'ac1.*.0401' => 'bail|required||max:2',
                'ac1.*.0402' => 'bail|required||max:2',
                'ac1.*.0403' => 'bail|required||max:2',
                'ac1.*.0404' => 'bail|required||max:2',
                'ac1.*.0405' => 'bail|required||max:2',
                'ac1.*.0406' => 'bail|required||max:2',
                'ac1.*.0407' => 'bail|required||max:50',
                'ac1.*.0500' => 'bail|required||max:2',
                'ac1.*.0501' => 'bail|required||max:20',
                'ac1.*.0600' => 'bail|required||max:2',
                'ac1.*.0601' => 'bail|required||max:2',
                'ac1.*.0602' => 'bail|required||max:2',
                'ac1.*.0603' => 'bail|required||max:2',
                'ac1.*.0604' => 'bail|required||max:2',
                'ac1_0701' => 'bail|required|max:50',
                'ac1_0702' => 'bail|required|max:50',
                'ac1_0703' => 'bail|required|max:50',
                'ac1_0704' => 'bail|required|max:50',
                'ac1_0705' => 'bail|required|max:50',
            ];
            $this->validate($request, $rules);
            
            foreach ($request->ac1 as $index => $userInput){
                DB::table('ac1s')->insert([
                    'ac1_r' => $request->R,
                    'ac1_ng' => $request->NG,
                    'ac1_dp' => $request->DP,
                    'ac1_db' => $request->DB,
                    'ac1_bp' => $request->BP,
                    'ac1_tk' => $request->TK,
                    'ac1_ir' => $request->IR,
                    'ac1_jir' => $request->JIR,
                    'ac1_jair' => $request->JAIR,
                    'ac1_jairp' => $request->JAIRP,
                    'ac1_001101' => $request->ac1_001101,
                    'ac1_001102' => $request->ac1_001102,
                    'ac1_001103' => $request->ac1_001103,
                    'ac1_001104' => $request->ac1_001104,
                    'ac1_001105' => $request->ac1_001105,
                    'ac1_001106' => $request->ac1_001106,
                    'ac1_001107' => $request->ac1_001107,
                    'ac1_001108' => $request->ac1_001108,
                    'ac1_001109' => $request->ac1_001109,
                    'ac1_001111' => $request->ac1_001111,
                    'ac1_001113' => $request->ac1_001113,
                    'ac1_001119' => $request->ac1_001119,
                    'ac1_catatan' => $request->ac1_catatan,
                    'a1_0100' => $userInput['0100'],
                    'a1_0101' => $userInput['0101'],
                    'a1_0102' => $userInput['0102'],
                    'a1_0103' => $userInput['0103'],
                    'a1_0104' => $userInput['0104'],
                    'a1_0105' => $userInput['0105'],
                    'a1_0106' => $userInput['0106'],
                    'a1_0107' => $userInput['0107'],
                    'a1_0108' => $userInput['0108'],
                    'a1_0109' => $userInput['0109'],
                    'a1_0110' => $userInput['0110'],
                    'a2_0200' => $userInput['0200'],
                    'a2_0201' => $userInput['0201'],
                    'a2_0202' => $userInput['0202'],
                    'a2_0203' => $userInput['0203'],
                    'a2_0204' => $userInput['0204'],
                    'a2_0205' => $userInput['0205'],
                    'a3_0300' => $userInput['0300'],
                    'a3_0301' => $userInput['0301'],
                    'a3_0302' => $userInput['0302'],
                    'a3_0303' => $userInput['0303'],
                    'a4_0400' => $userInput['0400'],
                    'a4_0401' => $userInput['0401'],
                    'a4_0402' => $userInput['0402'],
                    'a4_0403' => $userInput['0403'],
                    'a4_0404' => $userInput['0404'],
                    'a4_0405' => $userInput['0405'],
                    'a4_0406' => $userInput['0406'],
                    'a4_0407' => $userInput['0407'],
                    'a5_0500' => $userInput['0500'],
                    'a5_0501' => $userInput['0501'],
                    'a6_0600' => $userInput['0600'],
                    'a6_0601' => $userInput['0601'],
                    'a6_0602' => $userInput['0602'],
                    'a6_0603' => $userInput['0603'],
                    'a6_0604' => $userInput['0604'],
                    'a7_0701' => $request->ac1_0701,
                    'a7_0702' => $request->ac1_0702,
                    'a7_0703' => $request->ac1_0703,
                    'a7_0704' => $request->ac1_0704,
                    'a7_0705' => $request->ac1_0705,
                ]);
            }
            return redirect('/borang-AC2')->with('success', 'Data inserted succesfully');
        }catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        }catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == '23505'){
                return Redirect::back()->withErrors(['msg' => 'IC or email already registered!']);
            }
            else{
                echo $errorCode;
            }
        }
    }
}
