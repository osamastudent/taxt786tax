<?php

namespace App\Http\Controllers;

use App\Models\salaryincome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\salaryIncomeRequest;

class salaryIncomeController extends Controller
{


    // Salary Income form
    public function SalaryIncome()
    {
      return view('clientarea.incometaxfilingindividual.salary-income');
    }
    
    // Salary Income store into database
    public function SalaryIncomeStore(salaryIncomeRequest $request){
      $data = $request->all();
      
      $fileFields=[
        'salary_tax_certificate','salary_slip',
      ];

      foreach($fileFields as $field){
      if($request->hasFile($field)){
      $fileArray=[];
      foreach($request->file($field) as $file){
      $originalName=$file->getClientOriginalName();
      $file->move("Iincometaxfilingindividual/salaryincomefiles/",$originalName);
      $fileArray[]=$originalName;
      }
      $data[$field]=implode(',',$fileArray);
      }else{
        $data[$field]=null;
      }   
      }
      salaryIncome::create($data);
        if ($request->salaryincomename == "salary_income") {
                  return redirect()->route('SalaryIncome');
                  // return view('clientarea.incometaxfilingindividual.salary-income', compact('withholdingadjustablename'));
                } elseif ($request->rentincomename == "rent_income") {
                  return redirect()->route('RentIncome');
                } elseif ($request->businessincomename == "business_income") {
                  return redirect()->route('BusinessIncome');
                } elseif ($request->sharescapitalgainname == "shares_capital_gain") {
                  return redirect()->route('sharesCapitalGain');
                } elseif ($request->otherincomename == "other_income") {
                  return redirect()->route('OtherIncome');
                } elseif ($request->withholdingadjustablename == "withholding_adjustable_or_final_tax") {
                  return redirect()->route('WithholdingAdjustable');
                }
                else{
                  return redirect()->route('AssetsExpenseAvailable');        
                }
      
    }
    

    
}
