<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\SecpCompanyInProvincial;
use App\Http\Requests\SecpCompanyInProvincialRequest;

class SecpCompanyInProvincialController extends Controller
{
     
    // SECPCompanyInProvincial form
  public function SECPCompanyInProvincial()
  {
    
    $popup="SECPCompanyInProvincial";
    $userEnterMessage=UserEnter::where("status",'status')->get();
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
          session()->flash('enterUser', $userEnterMessage);
          return view('clientarea.provincial.secpcompany',compact('popup','userEnterMessage','formSubmitAlert'));
  }

     
    // SECPCompanyInProvincial store into database
  public function SECPCompanyInProvincialStore(Request $request)
  {
    // SecpCompanyInProvincialRequest
    $data = $request->all();
      
    $fileFields=[
        'copy_company_ntn',
        'cnic_copy_partners',
        'form_two',
        'incorporation_certificate',
        'moa',
        'aoa',
        'paid_electricity_bill',
        'tenancy_agreement_premises',
        'bank_maintenance_certificate',
    ];
    foreach($fileFields as $field){
    if($request->hasFile($field)){
    $fileArray=[];
    foreach($request->file($field) as $file){
    $originalName=$file->getClientOriginalName();
    $file->move("provincialsalestaxregistration/individual/",$originalName);
    $fileArray[]=$originalName;
    }
    $data[$field]=implode(',',$fileArray);
    }else{
      $data[$field]=null;
    }   
    }
    $data['user_email']=auth()->user()->email;
    SecpCompanyInProvincial::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
     session()->flash('success',$formSubmitAlert);
return redirect()->route('SECPCompanyInProvincial'); 
  }
}
