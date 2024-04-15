<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secpAnnualCompliance extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'company_name',
        'name',
        'company_status',
        'address',
        'ntn_number',
        'mobile_no',
        'filling_annual_return',
        'filling_balance_sheet_profit_loss',
        'filling_form_twentynine',
        'filling_income_tax_returns',
        'filling_sales_tax_returns',
        'compliance_with_companies_act',
        'compliance_with_securities',
    ];
}
