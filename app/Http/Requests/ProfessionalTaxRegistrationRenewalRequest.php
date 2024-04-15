<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionalTaxRegistrationRenewalRequest extends FormRequest
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
            'select_tatus'=>'required',
            'certificate_incorporation'=>'required',
            'certificate_incorporation.*'=>'required',
            'ntn_certificate'=>'required',
            'ntn_certificate.*'=>'required',
            'audited_financial_statements'=>'required',
            'audited_financial_statements.*'=>'required',
            'last_paid_challan'=>'required',
            'last_paid_challan.*'=>'required',
            'list_contractor'=>'required',
            'list_contractor.*'=>'required',
            'income_tax_returns'=>'required',
            'income_tax_returns.*'=>'required',
            'list_containing_names_numbers_owners'=>'required',
            'list_containing_names_numbers_owners.*'=>'required',
        ];
    }
}
