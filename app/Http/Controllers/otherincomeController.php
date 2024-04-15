<?php

namespace App\Http\Controllers;

use App\Models\otherincome;
use Illuminate\Http\Request;

class otherincomeController extends Controller
{

    // Other Income form
    public function OtherIncome()
    {
      return view('clientarea.incometaxfilingindividual.other-income');
    }

// Other Income store into databse
    public function OtherIncomeStore(Request $request){
        $request->validate([
            'relevant_income_supporting_evidence.*'=>'mimes:jpg,jpeg,pdf|max:1024',
            ],
        [
            'relevant_income_supporting_evidence.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the salary tax certificate.',
                'relevant_income_supporting_evidence.*.max' => 'The salary tax certificate file must not be greater than 1 MB in size.',
                   ]);
                   $data = $request->all();
                   $fileFields=[
                     'relevant_income_supporting_evidence'
                   ];   
                   foreach($fileFields as $field){
                   if($request->hasFile($field)){
                   $fileArray=[];
                   foreach($request->file($field) as $file){
                   $originalName=$file->getClientOriginalName();
                   $file->move("Iincometaxfilingindividual/otherincomefiles/",$originalName);
                   $fileArray[]=$originalName;
                   }
                   $data[$field]=implode(',',$fileArray);
                   }else{
                     $data[$field]=null;
                   }   
                   }
    otherincome::create($data);
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

