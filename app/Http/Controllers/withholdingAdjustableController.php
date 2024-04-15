<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\withholdingadjustable;
use App\Http\Requests\withholdingAdjustableRequest;

class withholdingAdjustableController extends Controller
{


    //Withholding Adjustable form
    public function WithholdingAdjustable()
    {
        return view('clientarea.incometaxfilingindividual.withholding-adjustable');
    }

    //Withholding Adjustable store into database

    public function WithholdingAdjustableStore(Request $request)
    {
        // withholdingAdjustableRequest
        $data = $request->all();
      
        $fileFields=[
            'fbr_computerized_payment_slips',
            'tax_on_electricty_bill',
            'mobile_phone_tax_certificate',
            'car_purchase_transfer_annual_tax',
            'any_other_tax_paid',
        ];
  
        foreach($fileFields as $field){
        if($request->hasFile($field)){
        $fileArray=[];
        foreach($request->file($field) as $file){
        $originalName=$file->getClientOriginalName();
        $file->move("Iincometaxfilingindividual/withholding/",$originalName);
        $fileArray[]=$originalName;
        }
        $data[$field]=implode(',',$fileArray);
        }else{
          $data[$field]=null;
        }   
        }
          withholdingadjustable::create($data);

        if ($request->salaryincomename == "salary_income") {
            return redirect()->route('SalaryIncome');
            // return view('clientarea.incometaxfilingindividual.salary-income', compact('withholdingadjustablename'));
        } elseif ($request->rentincomename == "rent_income") {
            return redirect()->route('RentIncome');
        } elseif ($request->businessincomename == "business_income") {
            return redirect()->route('BusinessIncome');
        } elseif ($request->sharescapitalgainname == "shares_capital_gain") {
            return redirect()->route('SharesCapitalGain');
        } elseif ($request->otherincomename == "other_income") {
            return redirect()->route('OtherIncome');
        } elseif ($request->withholdingadjustablename == "withholding_adjustable_or_final_tax") {
            return redirect()->route('WithholdingAdjustable');
        } else {
            return redirect()->route('AssetsExpenseAvailable');
        }
    }
}
