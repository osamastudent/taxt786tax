<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsebRegistration;

class PsebRegistrationController extends Controller
{
      
    
  // PSEB Registration 
  public function PsebRegistration()
  {
        return view('clientarea.psebregitration.pseb-registration');
  }
  // PSEB Registration 
  public function PsebRegistrationStore(Request $request)
  {
    $request->validate([
'registration_type'=>'required',
    ]);
    $data=$request->all();
    PsebRegistration::create($data);

    if($request['registration_type']=="Individual WithOut Business Name"){
        return redirect()->route('individualWithOutBusinessName');
    }
    elseif($request['registration_type']=="Individual With Business Name"){
        return redirect()->route('individualWithBusinessName');
    }
    else{
        return "Individual With Business Name";
    }

  }
  
  



}
