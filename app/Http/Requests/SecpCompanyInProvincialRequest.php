<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecpCompanyInProvincialRequest extends FormRequest
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
            'copy_company_ntn'=>'required',
            'copy_company_ntn.*'=>'required',
            'cnic_copy_partners'=>'required',
            'cnic_copy_partners.*'=>'required',
            'mobile_no'=>'required',
            'email'=>'required',
            'form_two'=>'required',
            'form_two.*'=>'required',
            'incorporation_certificate'=>'required',
            'incorporation_certificate.*'=>'required',
            'moa'=>'required',
            'aoa'=>'required',
            'paid_electricity_bill'=>'required',
            'paid_electricity_bill.*'=>'required',
            'tenancy_agreement_premises'=>'required',
            'tenancy_agreement_premises.*'=>'required',
            'bank_maintenance_certificate'=>'required',
            'bank_maintenance_certificate.*'=>'required',
        ];
    }
}
