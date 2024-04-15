<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\incomeTaxFilingIndividual;


class incomeTaxFilingIndividualController extends Controller
{

  public function IncomeTaxFilingStore(Request $request)
  {
  
    $selectedValues = $request['selectedValues'];
//     $data=$request->all();
//     $request->validate([
//     'selectedValues'=>'required',
//     ]);

//     if($request['selectedValues']){
//       foreach ($selectedValues as $selectedValue) {
// $data['tax_years']=$selectedValue;
// $data['salary_income']=$request['salaryincomename'];
// $data['rent_income']=$request['rentincomename'];
// $data['business_income']=$request['businessincomename'];
// $data['shares_capital_gain']=$request['sharescapitalgainname'];
// $data['other_income']=$request['otherincomename'];
// $data['withholding_adjustable']=$request['withholdingadjustablename'];


// IncomeTaxFilingIndividual::create($data);      
// }
      
//     }


    // Always treat selectedValues as an array
    $selectedValues = is_array($selectedValues) ? $selectedValues : [$selectedValues];
     foreach ($selectedValues as $selectedValue) {
        $incomeTaxFilingIndividualData = [
            'tax_years' => $selectedValue,
            'salary_income' => $request['salaryincomename'],
            'rent_income' => $request['rentincomename'],
            'business_income' => $request['businessincomename'],
            'shares_capital_gain' => $request['sharescapitalgainname'],
            'other_income' => $request['otherincomename'],
            'withholding_adjustable' => $request['withholdingadjustablename'],
        ];
         // Mass assignment for each selected value
        IncomeTaxFilingIndividual::create($incomeTaxFilingIndividualData);
    }
    
    

    $selectedYearsValues = $request->input('selectedValues',[]);
    $salaryincomename = $request->salaryincomename;
    $rentincomename = $request->rentincomename;
    $businessincomename = $request->businessincomename;
    $sharescapitalgainname = $request->sharescapitalgainname;
    $otherincomename = $request->otherincomename;
    $withholdingadjustablename = $request->withholdingadjustablename;


        // Store the selected values in the session
        Session::put('selectedValues', $selectedYearsValues);
        Session::put('salaryincomename', $salaryincomename);
        Session::put('rentincomename', $rentincomename);
        Session::put('businessincomename', $businessincomename);
        Session::put('sharescapitalgainname', $sharescapitalgainname);
        Session::put('otherincomename', $otherincomename);
        Session::put('withholdingadjustablename', $withholdingadjustablename);
    
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

    return "something went wrong";

//     $selectedValues = $request['selectedValues'];
// // Always treat selectedValues as an array
// $selectedValues = is_array($selectedValues) ? $selectedValues : [$selectedValues];

// $implodedTaxYears = implode(',', $selectedValues);

// $incomeTaxFilingIndividualData = [
//     'tax_years' => $implodedTaxYears,
//     'salary_income' => $request['salaryincomename'],
//     'rent_income' => $request['rentincomename'],
//     'business_income' => $request['businessincomename'],
//     'shares_capital_gain' => $request['sharescapitalgainname'],
//     'other_income' => $request['otherincomename'],
//     'withholding_adjustable' => $request['withholdingadjustablename'],
// ];

// // Mass assignment
// IncomeTaxFilingIndividual::create($incomeTaxFilingIndividualData);




// $selectedValues = $request['selectedValues'];
// If multiple values are selected, insert each value into the database separately
// if (is_array($selectedValues)) {
//     foreach ($selectedValues as $selectedValue) {
//         $incomeTaxFilingIndividualData = [
//             'tax_years' => $selectedValue,
//             'salary_income' => $request['salaryincomename'],
//             'rent_income' => $request['rentincomename'],
//             'business_income' => $request['businessincomename'],
//             'shares_capital_gain' => $request['sharescapitalgainname'],
//             'other_income' => $request['otherincomename'],
//             'withholding_adjustable' => $request['withholdingadjustablename'],
//         ];

//         // Mass assignment for each selected value
//         IncomeTaxFilingIndividual::create($incomeTaxFilingIndividualData);
//     }
// } else {
//     // If only one value is selected, insert a single record into the database
//     $incomeTaxFilingIndividualData = [
//         'tax_years' => $selectedValues,
//         'salary_income' => $request['salaryincomename'],
//         'rent_income' => $request['rentincomename'],
//         'business_income' => $request['businessincomename'],
//         'shares_capital_gain' => $request['sharescapitalgainname'],
//         'other_income' => $request['otherincomename'],
//         'withholding_adjustable' => $request['withholdingadjustablename'],
//     ];

//     // Mass assignment for the single selected value
//     IncomeTaxFilingIndividual::create($incomeTaxFilingIndividualData);
// }






        
    // save data into database
    // $obj=new incomeTaxFilingIndividual();

    // $selectedYearsValues = $request['selectedValues'];
    // // Convert the array to a comma-separated string
    // $taxYearsString = implode(',', $selectedYearsValues);
    // $obj->tax_years = $taxYearsString;

    // $obj->salary_income=$salaryincomename;
    // $obj->rent_income=$rentincomename;
    // $obj->business_income=$businessincomename;
    // $obj->shares_capital_gain=$sharescapitalgainname;
    // $obj->other_income=$otherincomename;
    // $obj->withholding_adjustable=$withholdingadjustablename;
    // $obj->save();

  }
  
}
