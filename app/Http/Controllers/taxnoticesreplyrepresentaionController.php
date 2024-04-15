<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\taxnoticesreplyrepresentaion;
use App\Http\Requests\taxnoticesreplyrepresentaionRequest;

class taxnoticesreplyrepresentaionController extends Controller
{
    
 
  // Tax Notices Reply & Representaion

  public function TaxNotices(Request $request)
  {
    
  if (Auth::check()) {
    $popup=$request->TaxNotices;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('enterUser', $userEnterMessage);
    return view('clientarea.tax-notices',compact('popup','userEnterMessage','formSubmitAlert'));
  } else {
    return redirect('user-login');
  }
}


  
  // Tax Notices Reply & Representaion Store into into database
  public function TaxNoticesStore(taxnoticesreplyrepresentaionRequest $request)
  {
    // taxnoticesreplyrepresentaionRequest
    $data=$request->all();
    
    $amountinvolvedfiles=[];
    if($request['upload_notice']){
foreach($request["upload_notice"] as $amountinvolvedValues){
    $originalName=$amountinvolvedValues->getClientOriginalName();
    $amountinvolvedValues->move("taxnoticesreply/",$originalName);
    $amountinvolvedfiles[]=$originalName;
}
$data['upload_notice']=implode(',',$amountinvolvedfiles);
    }
    else{
    $data['upload_notice']=null;
    }
    $data['user_email']=auth()->user()->email;
   taxnoticesreplyrepresentaion::create($data);
   $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('TaxNotices');
    
  }
}
