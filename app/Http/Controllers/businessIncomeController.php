<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\businessincome;
use App\Http\Requests\businessIncomeRequest;

class businessIncomeController extends Controller
{
  // business income form
  public function BusinessIncome()
  {
    return view('clientarea.incometaxfilingindividual.business-income');
  }



  public function BusinessIncomeStore(businessIncomeRequest $request)
  {
    $data = $request->all();

    $fileFields = [
      'bank_statement',
      'financial_statement',
    ];
    foreach ($fileFields as $field) {
      if ($request->hasFile($field)) {
        $fileArray = [];
        foreach ($request->file($field) as $file) {
          $originalName = $file->getClientOriginalName();
          $file->move("Iincometaxfilingindividual/businessincomefiles/", $originalName);
          $fileArray[] = $originalName;
        }
        $data[$field] = implode(',', $fileArray);
      } else {
        $data[$field] = null;
      }
    }

    businessincome::create($data);

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
    } else {
      return redirect()->route('AssetsExpenseAvailable');
    }
  }
}
