<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class soleproprietorbusinessntnregistrationRequest extends FormRequest
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
            'cnic_number'=>'required',
            'mobile_no'=>'required',
            'mobile_network'=>'required',
            'email'=>'required',
            'business_name'=>'required',
            'start_date'=>'required',
            'business_activity_description'=>'required',
            'business_address_electricity_bill'=>'required',
            'sales_tax_registration_required'=>'required',

            'picture_business_premises'=>'required',
            'picture_business_premises.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',
            
            'paid_utility_bill'=>'required',
            'paid_utility_bill.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',
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
                'picture_business_premises.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Picture of business premises.',
                'picture_business_premises.*.max' => 'The Picture of business premises file must not be greater than 1 MB in size.',
                
                'paid_utility_bill.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Paid Utility Bill.',
                'paid_utility_bill.*.max' => 'Paid Utility Bill file must not be greater than 1 MB in size.',
                
                
            ];
        }
}
