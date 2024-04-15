<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirmPartnershipRequest extends FormRequest
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
            'copy_firm_ntn' => 'required',
            'cnic_copy_partners' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'form_c' => 'required',
            'partnership_deed' => 'required',
            'paid_electricity_bill' => 'required',
            'tenancy_agreement_ownership' => 'required',
            'documents_business_premises' => 'required',
            'bank_maintenance_certificate' => 'required',
        ];
    }
}
