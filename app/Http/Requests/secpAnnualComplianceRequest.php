<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class secpAnnualComplianceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company_name'=>'required',
        'name'=>'required',
        'company_status'=>'required',
        'address'=>'required',
        'ntn_number'=>'required',
        'mobile_no'=>'required',
        // 'filling_annual_return'=>'required',
        // 'filling_balance_sheet_profit_loss'=>'required',
        // 'filling_form_twentynine'=>'required',
        // 'filling_income_tax_returns'=>'required',
        // 'filling_sales_tax_returns'=>'required',
        // 'compliance_with_companies_act'=>'required',
        // 'compliance_with_securities'=>'required',
        ];
    }
}
