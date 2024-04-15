<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\incomeTaxation;
use App\Models\formSubmitAlert;
use App\Http\Requests\incomeTaxationRequest;

class incomeTaxationController extends Controller
{

    // income taxation form
    public function IncomeTaxation()
    {
        $popup="IncomeTaxation";
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.ukusaservices.income-taxation',compact('popup','userEnterMessage','formSubmitAlert'));
    }

// income taxation form store into database
    public function IncomeTaxationStore(Request $request)
    {
        // incomeTaxationRequest
    $data=$request->all();
    $fileFields=[
        'two_form','ten_nine_form',
    ];

    foreach($fileFields as $field){
    if($request->hasFile($field)){
    $fileArray=[];
    foreach($request->file($field) as  $file){
    $originalName=$file->getClientOriginalName();
    $file->move('incometaxationfiles/',$originalName);
    $fileArray[]=$originalName;
    }
    $data[$field]=implode(',',$fileArray);
    }
    else{
     $data[$field]=null;
    }
    }
    $data['user_email']=auth()->user()->email;
    incomeTaxation::create($data);
     // Flash message and redirection
     $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
     session()->flash('success',$formSubmitAlert);
    return redirect()->route('IncomeTaxation');  
}       
}

