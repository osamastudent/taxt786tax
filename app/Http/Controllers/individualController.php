<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use App\Models\individual;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Http\Requests\individualRequest;

class individualController extends Controller
{
  
    // Individual form
  public function Individual()
  {
    
    $popup="Individual";
    $userEnterMessage=UserEnter::where("status",'status')->get();
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
          session()->flash('enterUser', $userEnterMessage);
          return view('clientarea.provincial.individual',compact('popup','userEnterMessage','formSubmitAlert'));
  }



    // Individual store into database
    public function IndividualStore(Request $request)
    {
        $data = $request->all();
      
        $fileFields=[
            'copy_ntn',
            'copy_cnic',
             'paid_electricity_bill',
            'tenancy_agreement_ownership',
            'documents_business_premises',
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
        individual::create($data);
        // Flash message and redirection
     $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
     session()->flash('success',$formSubmitAlert);
    return redirect()->route('Individual');      
          
        }
        
  
    }

