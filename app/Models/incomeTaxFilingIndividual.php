<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incomeTaxFilingIndividual extends Model
{
    
    protected $fillable=[
        'tax_years',
        'salary_income',
        'rent_income',
        'business_income',
        'shares_capital_gain',
        'other_income',
        'withholding_adjustable'
        ];

        use HasFactory;
}


