<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use App\Models\rentincome;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;

class rentIncomeController extends Controller
{

    // Rent Income form
    public function RentIncome()
    {
      
            return view('clientarea.incometaxfilingindividual.rent-income');
    }

    // Rent Income  stored into database
    public function RentIncomeStore(Request $request){
      $request->validate([
        'rent_agreement.*'=>'mimes:jpg,jpeg,pdf|max:1024',
        ],
    [
        'rent_agreement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the salary tax certificate.',
            'rent_agreement.*.max' => 'The salary tax certificate file must not be greater than 1 MB in size.',
               ]);

      $data = $request->all();
      
      $fileFields=[
        'rent_agreement'
      ];

      foreach($fileFields as $field){
      if($request->hasFile($field)){
      $fileArray=[];
      foreach($request->file($field) as $file){
      $originalName=$file->getClientOriginalName();
      $file->move("Iincometaxfilingindividual/rentincomefiles/",$originalName);
      $fileArray[]=$originalName;
      }
      $data[$field]=implode(',',$fileArray);
      }else{
        $data[$field]=null;
      }   
      }
      rentincome::create($data);

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
