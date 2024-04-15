<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\federalsalestaxregistration;
use App\Http\Requests\federalsalestaxregistrationRequest;

class federalsalestaxregistrationController extends Controller
{
      // Federal Sales Tax Registration
  public function FederalSales(Request $request)
  {
   
      if (Auth::check()) {
        $popup=$request->FederalSales;
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.federal-sales',compact('popup','userEnterMessage','formSubmitAlert'));
      } else {
        return redirect('user-login');
      }
  }


    // Federal Sales Tax Registration store into database
    public function FederalSalesStore(Request $request)
    {
        // federalsalestaxregistrationRequest
        $data=$request->all();
      
        $electricitybillfiles=[];
        $bankaccountmaintenancecertificatefiles=[];
        $businesspremisespicturefiles=[];
        
        
        if($request['electricity_bill']){
            foreach($request['electricity_bill'] as $picturebusinesspremisesValues ){
                $originalNameFirst=$picturebusinesspremisesValues->getClientOriginalName();
                $picturebusinesspremisesValues->move('federalsalestaxregistration/',$originalNameFirst);
                $electricitybillfiles[]=$originalNameFirst;
                }
                $data['electricity_bill']=implode(',',$electricitybillfiles);
        }
        else{
            $data['electricity_bill']=null;
        }
        
        if($request['bank_account_maintenance_certificate']){
            foreach($request['bank_account_maintenance_certificate'] as $picturebusinesspremisesValues ){
                $originalNameSecond=$picturebusinesspremisesValues->getClientOriginalName();
                $picturebusinesspremisesValues->move('federalsalestaxregistration/',$originalNameSecond);
                $bankaccountmaintenancecertificatefiles[]=$originalNameSecond;
                }
                $data['bank_account_maintenance_certificate']=implode(',',$bankaccountmaintenancecertificatefiles);
        }
        else{
            $data['bank_account_maintenance_certificate']=null;
        }
        if($request['business_premises_picture']){
            foreach($request['business_premises_picture'] as $picturebusinesspremisesValues ){
                $originalNameThird=$picturebusinesspremisesValues->getClientOriginalName();
                $picturebusinesspremisesValues->move('federalsalestaxregistration/',$originalNameThird);
                $businesspremisespicturefiles[]=$originalNameThird;
                }
                $data['business_premises_picture']=implode(',',$businesspremisespicturefiles);
        }
        else{
            $data['business_premises_picture']=null;
        }

        $data['user_email']=auth()->user()->email;
                federalsalestaxregistration::create($data);      
                
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
        return redirect()->route('FederalSales');

      
    }
}
