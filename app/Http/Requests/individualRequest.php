<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class individualRequest extends FormRequest
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
            'copy_ntn'=>'required',
            'copy_ntn.*'=>'required',
        'copy_cnic'=>'required',
        'copy_cnic.*'=>'required',
        'mobile_no'=>'required',
        'email'=>'required',
        'paid_electricity_bill'=>'required',
        'paid_electricity_bill.*'=>'required',
        'tenancy_agreement_ownership'=>'required',
        'tenancy_agreement_ownership.*'=>'required',
        'documents_business_premises'=>'required',
        'documents_business_premises.*'=>'required',
        'bank_maintenance_certificate'=>'required',
        'bank_maintenance_certificate.*'=>'required',
        ];
    }
}
