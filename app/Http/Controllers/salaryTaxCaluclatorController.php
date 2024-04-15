<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salaryTaxCaluclatorController extends Controller
{

// calculation salaryTaxCalculation form
    public function withholdingTaxCalculation(){
       
        return view('calculators.withholding-calculator');      
    }
    
// calculation salaryTaxCalculation form
    public function salaryTaxCalculation(){
        $salary=null;
    $month=null;
    $totalSalary=null;
        return view('calculators.salary-tax-calculator',compact('salary','month','totalSalary'));      
    }

// calculation login here
   public function salaryTaxCalculationStore (Request $request)
    {
      
    $salary=$request->salary;
    $month=$request->month;
    $totalSalary=$salary * $month;

        return view('calculators.salary-tax-calculator',compact('salary','month','totalSalary'));
    }


    // rentTaxCalculation form
    public function rentTaxCalculation(){
        $salary = null;
        $taxDetails = null;
        $taxableSalary = null;
        $salaryMonths = null;
        $annualTaxableSalary = null;
        return view('calculators.rent-calculator', compact('taxDetails', 'taxableSalary', 'salaryMonths', 'annualTaxableSalary'));
    }
    // rentTaxCalculation calculation
    public function rentTaxCalculationStore(Request $request)
    {
        $salary = $request->input('salary');
        $taxDetails = $this->calculateTaxDetails($salary);
        $taxableSalary = null;
        $salaryMonths = null;
        $annualTaxableSalary = null;
        return view('calculators.rent-calculator', compact('taxDetails', 'taxableSalary', 'salaryMonths', 'annualTaxableSalary'));
    }

    private function calculateTaxDetails($salary)
    {
        $taxDetails = [
            'fixedTax' => 0,
            'slabMaxLimit' => 0,
            'exceededAmount' => 0,
            'totalRate' => 0,
            'totalTax' => 0,
        ];

        if ($salary <= 300000) {
            $taxDetails['fixedTax'] = 0;
            $taxDetails['slabMaxLimit'] = 0;
            $taxDetails['exceededAmount'] = 0;
            $taxDetails['totalRate'] = 0;
            $taxDetails['totalTax'] = 0;
        } elseif ($salary <= 600000) {
            $taxDetails = $this->calculateTaxSlab($salary, 300000, 0.5, 0);
        } elseif ($salary <= 2000000) {
            $taxDetails = $this->calculateTaxSlab($salary, 600000, 0.1, 15000);
        } elseif ($salary > 2000000) {
            $taxDetails = $this->calculateTaxSlab($salary, 2000000, 0.25, 155000);
        } else {
            // $taxDetails = $this->calculateTaxSlab($salary, 4000000, 0.35, 765000);
            // $taxDetails = $this->calculateTaxSlab(0, 0, 0, 0);
            // Salary exceeds 4000000, set all values to 0
            $taxDetails['fixedTax'] = 0;
            $taxDetails['slabMaxLimit'] = 0;
            $taxDetails['exceededAmount'] = 0;
            $taxDetails['totalRate'] = 0;
            $taxDetails['totalTax'] = 0;
        }

        return $taxDetails;
    }

    private function calculateTaxSlab($salary, $prevLimit, $rate, $prevTax)
    {
        $exceededAmount = $salary - $prevLimit;
        $totalRate = $rate * 100; // Convert rate to percentage
        $taxOnExceededAmount = $exceededAmount * $rate;
        $totalTax = $prevTax + $taxOnExceededAmount;

        return [
            'fixedTax' => $prevTax,
            'slabMaxLimit' => $prevLimit,
            'exceededAmount' => $exceededAmount,
            'totalRate' => $totalRate,
            'taxOnExceededAmount' => $taxOnExceededAmount,
            'totalTax' => $totalTax,
        ];
    }


}
