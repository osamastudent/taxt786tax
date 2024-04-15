<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\secpAnnualCompliance;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\secpAnnualComplianceRequest;

class secpAnnualComplianceController extends Controller
{
    
  // SECP Annual Compliance
  public function SECPAnnual(Request $request)
  {
    if (Auth::check()) {
      $popup=$request->SECPAnnual;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.secp-annual',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }


  

  
  // SECP Annual Compliance
  public function SECPAnnualStore(secpAnnualComplianceRequest $request)
  {
    // secpAnnualComplianceRequest
    $data=$request->all();
    $data['user_email']=auth()->user()->email;
    secpAnnualCompliance::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('SECPAnnual');
    
  }
}
