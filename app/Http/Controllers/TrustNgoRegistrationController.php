<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\TrustNgoRegistration;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TrustNgoRegistrationRequest;

class TrustNgoRegistrationController extends Controller
{
    
    
     // Trust / NGO Registration 
  public function TrustNGORegistration(Request $request)
  {
    if (Auth::check()) {
    $popup=$request->TrustNGORegistration;
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.trust-ngo-registration',compact('popup','userEnterMessage','formSubmitAlert'));
      } else {
        return redirect('user-login');
      }
  }

   // Trust / NGO Registration 
   public function TrustNGORegistrationStore(TrustNgoRegistrationRequest $request)
   {
    // TrustNgoRegistrationRequest
     $data=$request->all();  
     $data['user_email']=auth()->user()->email;
     TrustNgoRegistration::create($data);
     $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('TrustNGORegistration');
}
}
