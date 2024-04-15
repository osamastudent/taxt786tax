<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\IFTTTHandler;
use Illuminate\Support\Facades\Auth;
use App\Models\personalntnregistration;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\PersonalNtnRegistrationRequest;
use App\Models\formSubmitAlert;
use App\Models\UserEnter;

class PersonalNtnRegistrationController extends Controller
{
  // personal ntn registratin form
  public function PersonalNtnRegistration(Request $request)
  {
    
    if (Auth::check()) {

      $popup=$request->personal_ntn_registration;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.personal-ntn-registration',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }

 
  // Income Tax Filing – Individual
  public function IncomeTaxFiling()
  {
    return view('clientarea.income-tax-filing');
  }


  //           public function  PersonalNtnRegistrationStore(Request $request){
  // $data=$request->all();
  // $file=$request->file('postal_address');
  // $originalname=$file->getClientOriginalName();
  // $file->move('myfilesfolder/',$originalname);
  // $data['postal_address']=$originalname;
  // personalntnregistration::create($data);
  // return "data has saved";
  //           }

  public function PersonalNtnRegistrationStore(Request $request)
  {
    
    $data=$request->all();
    $data['user_email']=auth()->user()->email;
    personalntnregistration::create($data);
    
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
        return redirect()->route('PersonalNtnRegistration');
  }

  public function show()
  {
    alert()->warning('Sweet Alert with warning.');

    $data = personalntnregistration::all();
    return view('clientarea.show', compact('data'));
  }


  // delete
  public function delete($id)
  {
    $delete = personalntnregistration::find($id);
    $data = personalntnregistration::all();
    $delete->delete();
    return back();
  }

  //  
  
  public function IndividualStored(Request $request)
  {
    // $re// Check if the alert has already been shown
    if (!$request->session()->has('alert_shown')) {

      $request->session()->put('alert_shown', true);
    }

    // Redirect to the same page without keeping the data in the session
    
    return redirect()->route('SECPCompanyInProvincial');
    session()->flush();
  }
}
