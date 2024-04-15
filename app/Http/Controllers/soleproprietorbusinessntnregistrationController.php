<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\personalntnregistration;
use App\Models\soleproprietorbusinessntnregistration;
use App\Http\Requests\soleproprietorbusinessntnregistrationRequest;

class soleproprietorbusinessntnregistrationController extends Controller
{
      // Sole Proprietor Business NTN Registration form
  public function SoleProprietorBusinessNTNRegistration(Request $request)
  {
    if (Auth::check()) {

      // dd($request['personal_ntn_registration']);
      $popup=$request->SoleProprietorBusinessNTNRegistration;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.sole-proprietor',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }

  

// Sole Proprietor Business NTN Registration store into database
public function SoleProprietorBusinessNTNRegistrationStore(soleproprietorbusinessntnregistrationRequest $request){
  // soleproprietorbusinessntnregistrationRequest

  $data=$request->all();
    $picturebusinesspremisesfiles=[];
    $paidutilitybillfiles=[];
    
    
    if($request['picture_business_premises']){
        foreach($request['picture_business_premises'] as $picturebusinesspremisesValues ){
            $originalNameFirst=$picturebusinesspremisesValues->getClientOriginalName();
            $picturebusinesspremisesValues->move('soleproprieterfiles/',$originalNameFirst);
            $picturebusinesspremisesfiles[]=$originalNameFirst;
            }
            $data['picture_business_premises']=implode(',',$picturebusinesspremisesfiles);
    }
    else{
        $data['picture_business_premises']=null;
    }
    
    if($request['paid_utility_bill']){
        foreach($request['paid_utility_bill'] as $picturebusinesspremisesValues ){
            $originalNameFirst=$picturebusinesspremisesValues->getClientOriginalName();
            $picturebusinesspremisesValues->move('soleproprieterfiles/',$originalNameFirst);
            $paidutilitybillfiles[]=$originalNameFirst;
            }
            $data['paid_utility_bill']=implode(',',$paidutilitybillfiles);
    }
    else{
        $data['paid_utility_bill']=null;
    }
    
    
    $data['user_email']=auth()->user()->email;
    soleproprietorbusinessntnregistration::create($data);

    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);    
    return redirect()->route('SoleProprietorBusinessNTNRegistration');
}


}
