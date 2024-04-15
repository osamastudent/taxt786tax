<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\quarterlyannualwithholding;
use App\Http\Requests\quarterlyannualwithholdingRequest;

class quarterlyannualwithholdingController extends Controller
{
    // Quarterly & Annual Withholding Tax Statement Filing

  public function QuarterlyAnnual(Request $request)
  {
       if (Auth::check()) {
      $popup=$request->QuarterlyAnnual;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.quarterly-annual',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }

  }


    // Quarterly & Annual Withholding Tax Statement Filing store into database

  public function QuarterlyAnnualStore(quarterlyannualwithholdingRequest $request)
  {
    // quarterlyannualwithholdingRequest
    $data=$request->all();
    
    $invoicesfiles=[];
    $employeessalarysheetfiles=[];
    
    if($request['invoices']){
        foreach($request['invoices'] as $invoicesValues ){
            $originalNameFirst=$invoicesValues->getClientOriginalName();
            $invoicesValues->move('quarterlyannualwithholding/',$originalNameFirst);
            $invoicesfiles[]=$originalNameFirst;
            }
            $data['invoices']=implode(',',$invoicesfiles);
    }
    else{
        $data['invoices']=null;
    }
    
    if($request['employees_salary_sheet']){
        foreach($request['employees_salary_sheet'] as $employeessalarysheetValues ){
            $originalNameFirst=$employeessalarysheetValues->getClientOriginalName();
            $employeessalarysheetValues->move('quarterlyannualwithholding/',$originalNameFirst);
            $employeessalarysheetfiles[]=$originalNameFirst;
            }
            $data['employees_salary_sheet']=implode(',',$employeessalarysheetfiles);
    }
    else{
        $data['employees_salary_sheet']=null;
    }
    
    
    
    $data['user_email']=auth()->user()->email;
    quarterlyannualwithholding::create($data);
    
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('QuarterlyAnnual');


     
  }

}
