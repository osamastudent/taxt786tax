<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\salestaxmonthlyfiling;
use App\Http\Requests\salestaxmonthlyRequest;

class salestaxmonthlyfilingController extends Controller
{
    
    // Sales Tax Monthly Filing
  public function SalesTax(Request $request)
  {
    
         if (Auth::check()) {
        $popup=$request->SalesTax;
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.sales-tax',compact('popup','userEnterMessage','formSubmitAlert'));
      } else {
        return redirect('user-login');
      }
  }


  // Sales Tax Monthly Filing store into database
  public function SalesTaxStore(salestaxmonthlyRequest $request)
  {
    // salestaxmonthlyRequest
    $data=$request->all();
      
    
    $uploadpurchaseinvoicesfiles=[];
    $uploadsalesinvoicesfiles=[];
    $purchasesheetfiles=[];

    
    
    if($request['upload_purchase_invoices']){
        foreach($request['upload_purchase_invoices'] as $uploadpurchaseinvoicesValues ){
            $originalNameFirst=$uploadpurchaseinvoicesValues->getClientOriginalName();
            $uploadpurchaseinvoicesValues->move('federalsalestaxregistration/',$originalNameFirst);
            $uploadpurchaseinvoicesfiles[]=$originalNameFirst;
            }
            $data['upload_purchase_invoices']=implode(',',$uploadpurchaseinvoicesfiles);
    }
    else{
        $data['upload_purchase_invoices']=null;
    }
    
    if($request['upload_sales_invoices']){
        foreach($request['upload_sales_invoices'] as $uploadsalesinvoicesValues ){
            $originalNameSecond=$uploadsalesinvoicesValues->getClientOriginalName();
            $uploadsalesinvoicesValues->move('federalsalestaxregistration/',$originalNameSecond);
            $uploadsalesinvoicesfiles[]=$originalNameSecond;
            }
            $data['upload_sales_invoices']=implode(',',$uploadsalesinvoicesfiles);
    }
    else{
        $data['upload_sales_invoices']=null;
    }
    if($request['purchase_sheet']){
        foreach($request['purchase_sheet'] as $purchasesheetValues ){
            $originalNameThird=$purchasesheetValues->getClientOriginalName();
            $purchasesheetValues->move('federalsalestaxregistration/',$originalNameThird);
            $purchasesheetfiles[]=$originalNameThird;
            }
            $data['purchase_sheet']=implode(',',$purchasesheetfiles);
    }
    else{
        $data['purchase_sheet']=null;
    }
$data['user_email']=auth()->user()->email;
    salestaxmonthlyfiling::create($data);
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);      
    return redirect()->route('SalesTax');


  }
}
