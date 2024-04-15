<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sharescapitalgain;
use App\Http\Requests\sharesCapitalGainRequest;

class sharesCapitalGainController extends Controller
{
     // shares capital gain frm
     public function sharesCapitalGain()
     {
       return view('clientarea.incometaxfilingindividual.shares-capital-gain');
     }
 
 
     // shares capital gain store into database
     public function sharesCapitalGainStore(sharesCapitalGainRequest $request){
        $data = $request->all();
      

        $cdcstatementfiles = [];
        $stockbrokerstatementfiles = [];
        
        if ($request->has('cdc_statement')) {
            foreach ($request->file('cdc_statement') as $salarytaxcertificateValues) {
                $originalName1 = $salarytaxcertificateValues->getClientOriginalName();
                $salarytaxcertificateValues->move("incometaxfillingfolder/sharescapitalgain/", $originalName1);
                $cdcstatementfiles[] = $originalName1;
            }
        
            $data['cdc_statement'] = implode(',', $cdcstatementfiles);
        } else {
            $data['cdc_statement'] = null;
        }
        
        if ($request->has('stock_broker_statement')) {
            foreach ($request->file('stock_broker_statement') as $salaryslipValues) {
                $orginalName2 = $salaryslipValues->getClientOriginalName();
                $salaryslipValues->move("incometaxfillingfolder/salaryincome/", $orginalName2);
                $stockbrokerstatementfiles[] = $orginalName2;
            }
        
            $data['stock_broker_statement'] = implode(',', $stockbrokerstatementfiles);
        } else {
            $data['stock_broker_statement'] = null;
        }
      



        $nccplcapitalgaintaxcertificatefiles = [];
        $cdcdividendstatementfiles = [];
        
        if ($request->has('nccpl_capital_gain_tax_certificate')) {
            foreach ($request->file('nccpl_capital_gain_tax_certificate') as $salarytaxcertificateValues) {
                $originalName3 = $salarytaxcertificateValues->getClientOriginalName();
                $salarytaxcertificateValues->move("incometaxfillingfolder/sharescapitalgain/", $originalName3);
                $nccplcapitalgaintaxcertificatefiles[] = $originalName3;
            }
        
            $data['nccpl_capital_gain_tax_certificate'] = implode(',', $nccplcapitalgaintaxcertificatefiles);
        } else {
            $data['nccpl_capital_gain_tax_certificate'] = null;
        }
        
        if ($request->has('cdc_dividend_statement')) {
            foreach ($request->file('cdc_dividend_statement') as $salaryslipValues) {
                $orginalName4 = $salaryslipValues->getClientOriginalName();
                $salaryslipValues->move("incometaxfillingfolder/salaryincome/", $orginalName4);
                $cdcdividendstatementfiles[] = $orginalName4;
            }
        
            $data['cdc_dividend_statement'] = implode(',', $cdcdividendstatementfiles);
        } else {
            $data['cdc_dividend_statement'] = null;
        }


        sharescapitalgain::create($data);
  
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
                  }
                  else{
                    return redirect()->route('AssetsExpenseAvailable');        
                  }
        
      

     }
}
