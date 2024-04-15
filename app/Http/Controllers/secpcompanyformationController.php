<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\secpcompanyformation;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\secpcompanyformationRequest;

class secpcompanyformationController extends Controller
{
    
  // SECP Company Formation
  public function SECPCompany(Request $request)
  {
         if (Auth::check()) {
        $popup=$request->SECPCompany;
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.secp-company',compact('popup','userEnterMessage','formSubmitAlert'));
      } else {
        return redirect('user-login');
      }
  }

  public function SECPCompanyStore(secpcompanyformationRequest $request)
{
    // secpcompanyformationRequest
    $data = $request->all();
    // Process suggested names
    $data['suggested_name'] = implode(',', $request->input('suggested_name', []));
    // File upload handling
    $fileFields = [
        'nic_front_back', 'blood_relative_cnic', 'witness_one_cnic', 'witness_two_cnic'
    ];
foreach ($fileFields as $field){
if ($request->hasFile($field)){
 $fileArray = [];

            foreach ($request->file($field) as $file) {
                $originalName = $file->getClientOriginalName();
                $file->move('secpcompanyformationfiles/', $originalName);
                $fileArray[] = $originalName;
            }

            $data[$field] = implode(',', $fileArray);
        } else {
            $data[$field] = null;
        }
    }
    // Store data in the database
    $data['user_email']=auth()->user()->email;
    secpcompanyformation::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('SECPCompany');
}
   
}

