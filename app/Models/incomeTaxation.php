<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incomeTaxation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'emp_name',
        'job_title',
        'address',
        'salary_information',
        'wage_information',
        'emp_start_start_date',
        'emp_start_end_date',
        'two_form',
        'ten_nine_form',
        'investment_income',
        'rental_income',
        'self_emp_income',
        'retirement_income',
        'other_sources_income',
        'medical_expenses',
        'charitable_donations',
        'mortgage_interest',
        'property_taxes',
        'education_expenses',
        'other_tax_deductions_credits',
    ];
}
