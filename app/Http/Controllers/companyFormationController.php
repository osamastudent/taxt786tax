<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\companyFormation;
use App\Http\Requests\companyFormationRequest;

class companyFormationController extends Controller
{
    
    // Company formation form
    public function CompanyFormation()
    {
        
        $popup="CompanyFormation";
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.ukusaservices.company-formation',compact('popup','userEnterMessage','formSubmitAlert'));
    }


    // Company formation store into database
    public function CompanyFormationStore(companyFormationRequest $request)
    {
        // companyFormationRequest
    $data=$request->all();
    $fileFields=[
'ownership_inf_document'
    ];

    foreach($fileFields as $field){
    if($request->hasFile($field)){
    $fileArray=[];
    foreach($request->file($field) as $file){
    $originalName=$file->getClientOriginalName();
    $file->move('companyformation/',$originalName);
    $fileArray[]=$originalName;
    }
    $data['ownership_inf_document']=implode(',',$fileArray);
    }
    else{
    $data['ownership_inf_document']=null;
    }
    $data['user_email']=auth()->user()->email;
    companyFormation::create($data);
    // Flash message and redirection
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
     session()->flash('success',$formSubmitAlert);
    return redirect()->route('CompanyFormation');  
    }

    }

}


