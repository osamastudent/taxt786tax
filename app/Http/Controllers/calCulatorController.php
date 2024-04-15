<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calCulatorController extends Controller
{

    // Calculator view
    public function Calculator()
    {
        $taxDetails = null;
        $taxableSalary = null;
        $salaryMonths = null;
        $annualTaxableSalary = null;
        return view('calculators.individual-calculator', compact('taxDetails', 'taxableSalary', 'salaryMonths', 'annualTaxableSalary'));
        
    }


    // calculation 

    public function Calculation(Request $request)
    {
        $salary = $request->input('salary');
        $taxDetails = $this->calculateTaxDetails($salary);
        $taxableSalary = null;
        $salaryMonths = null;
        $annualTaxableSalary = null;
        return view('calculators.individual-calculator', compact('taxDetails', 'taxableSalary', 'salaryMonths', 'annualTaxableSalary'));
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

        if ($salary <= 600000) {
            $taxDetails['fixedTax'] = 0;
            $taxDetails['slabMaxLimit'] = 0;
            $taxDetails['exceededAmount'] = 0;
            $taxDetails['totalRate'] = 0;
            $taxDetails['totalTax'] = 0;
        } elseif ($salary <= 800000) {
            $taxDetails = $this->calculateTaxSlab($salary, 600000, 0.075, 0);
        } elseif ($salary <= 1200000) {
            $taxDetails = $this->calculateTaxSlab($salary, 800000, 0.15, 15000);
        } elseif ($salary <= 2400000) {
            $taxDetails = $this->calculateTaxSlab($salary, 1200000, 0.2, 75000);
        } elseif ($salary <= 3000000) {
            $taxDetails = $this->calculateTaxSlab($salary, 2400000, 0.25, 315000);
        } elseif ($salary <= 4000000) {
            $taxDetails = $this->calculateTaxSlab($salary, 3000000, 0.3, 465000);
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
