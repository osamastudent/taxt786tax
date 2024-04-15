<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\monthlytaxretainership;
use App\Http\Requests\monthlytaxretainershipRequest;

class monthlytaxretainershipController extends Controller
{
     // Monthly Tax Retainership
  public function MonthlyRetainership(Request $request)
  {
    
   
    if (Auth::check()) {
      $popup=$request->MonthlyRetainership;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.monthly-retainership',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }


   // Monthly Tax Retainership store into database
   public function MonthlyRetainershipStore(monthlytaxretainershipRequest $request)
   {
    // monthlytaxretainershipRequest
    $data=$request->all();
    $data['user_email']=auth()->user()->email;
    monthlytaxretainership::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
        return redirect()->route('MonthlyRetainership');
   }
}
