<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\salesTaxation;
use App\Models\formSubmitAlert;
use App\Http\Requests\salesTaxationRequest;


class salesTaxationController extends Controller
{

    // Sales Taxation form
    public function SalesTaxation()
    {
        $popup="SalesTaxation";
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.ukusaservices.sales-taxation',compact('popup','userEnterMessage','formSubmitAlert'));
    }


    // Sales Taxation store into databse
    public function SalesTaxationStore(Request $request)
    {
        // salesTaxationRequest
        $data=$request->all();
    $fileFields=[
        'sales_receipts',
        'invoices',
        'other_documents',
    ];

    foreach($fileFields as $field){
    if($request->hasFile($field)){
    $fileArray=[];
    foreach($request->file($field) as  $file){
    $originalName=$file->getClientOriginalName();
    $file->move('salestaxationfiles/',$originalName);
    $fileArray[]=$originalName;
    }
    $data[$field]=implode(',',$fileArray);
    }
    else{
     $data[$field]=null;
    }
    }
    $data['user_email']=auth()->user()->email;
    salesTaxation::create($data);
    // Flash message and redirection
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('SalesTaxation');  
}       
    }

