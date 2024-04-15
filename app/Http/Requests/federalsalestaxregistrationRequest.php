<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class federalsalestaxregistrationRequest extends FormRequest
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
        'fbr_id'=>'required',
        'fbr_password'=>'required',

        'electricity_bill'=>'required',
        'electricity_bill.*'=>'required',

        'bank_account_maintenance_certificate'=>'required',
        'bank_account_maintenance_certificate.*'=>'required',

        'business_premises_picture'=>'required',
        'business_premises_picture.*'=>'required',
        ];
    }
     /**
        * Get custom error messages for validator errors.
        *
        * @return array<string, string>
        */
        public function messages()
        {
            return [
                'electricity_bill.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Electricity Bill.',
                'electricity_bill.*.max' => 'The Electricity Bill file must not be greater than 1 MB in size.',
                
                'bank_account_maintenance_certificate.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Bank Account Maintenance certificate.',
                'bank_account_maintenance_certificate.*.max' => 'Bank Account Maintenance certificate file must not be greater than 1 MB in size.',
                
                'business_premises_picture.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Business Premises Picture.',
                'business_premises_picture.*.max' => 'Business Premises Picture file must not be greater than 1 MB in size.',
                
                
            ];
        }
}
