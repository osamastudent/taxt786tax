<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\SecpAnnualExternalAnnualAudit;
use App\Http\Requests\ExternalAnnualAuditRequest;

class ExternalAnnualAuditController extends Controller
{
    // External Annual Audit
  public function ExternalAnnual(Request $request)
  {
    
    if (Auth::check()) {
      $popup=$request->ExternalAnnual;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.external-annual',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }


  // External Annual Audit
  public function ExternalAnnualStore(ExternalAnnualAuditRequest $request)
  {
    // ExternalAnnualAuditRequest
    $data=$request->all();
    $data['user_email']=auth()->user()->email;
    SecpAnnualExternalAnnualAudit::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('ExternalAnnual');
    
  }

}
