<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\AccountingBookKeepingService;
use App\Http\Requests\AccountingBookKeepingServiceRequest;

class AccountingBookKeepingServiceController extends Controller
{
  // Accounting & Book keeping Services

  public function AccountingBookkeepingServices(Request $request)
  {
    if (Auth::check()) {
      $popup=$request->AccountingBookkeepingServices;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.accounting-book-keeping-services',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }




   // Accounting & Book keeping Services store into database

   public function AccountingBookkeepingServicesStore(AccountingBookKeepingServiceRequest $request)
   {
    // AccountingBookKeepingServiceRequest
        $data=$request->all();
        $data['user_email']=auth()->user()->email;
    AccountingBookKeepingService::create($data);
    
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('AccountingBookkeepingServices');
   }
}
