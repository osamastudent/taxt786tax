<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class incomeTaxationRequest extends FormRequest
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
            'emp_name'=>'required',
        'job_title'=>'required',
        'address',
        'salary_information'=>'required',
        'wage_information'=>'required',
        'emp_start_start_date'=>'required',
        'emp_start_end_date'=>'required',
        'two_form'=>'required',
        'two_form.*'=>'required',
        'ten_nine_form'=>'required',
        'ten_nine_form.*'=>'required',
        'investment_income'=>'required',
        'rental_income'=>'required',
        'self_emp_income'=>'required',
        'retirement_income'=>'required',
        'other_sources_income'=>'required',
        'medical_expenses'=>'required',
        'charitable_donations'=>'required',
        'mortgage_interest'=>'required',
        'property_taxes'=>'required',
        'education_expenses'=>'required',
        'other_tax_deductions_credits'=>'required',
        ];
    }
}
