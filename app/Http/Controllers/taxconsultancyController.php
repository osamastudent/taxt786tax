<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\taxconsultancy;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\taxconsultancyRequest;

class taxconsultancyController extends Controller
{
     // Tax Consultancy
  public function TaxConsultancy(Request $request){
   
    if (Auth::check()) {
      $popup=$request->TaxConsultancy;
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.tax-consultancy',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }

  public function TaxConsultancyStore(taxconsultancyRequest $request)
  {
    // taxconsultancyRequest
    $data=$request->all();
    $data['user_email']=auth()->user()->email;
    taxconsultancy::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('TaxConsultancy');
  }
}
