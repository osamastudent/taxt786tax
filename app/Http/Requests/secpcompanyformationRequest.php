<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class secpcompanyformationRequest extends FormRequest
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
        'type_registraion'=>'required',
        
        'suggested_name'=>'required',
        'suggested_name.*'=>'required',

        'nic_front_back'=>'required',
        'nic_front_back.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',

        'blood_relative_cnic'=>'required',
        'blood_relative_cnic.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',


        'email_registered_cnic'=>'required',
        

        'mobile_no_registered_cnic'=>'required',
        

        'company_address'=>'required',
        'business_description'=>'required',
        
        'witness_one_cnic'=>'required',
        'witness_one_cnic.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',

        'witness_two_cnic'=>'required',
        'witness_two_cnic.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',
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
                'type_registraion.required' => 'The Type Of Registration Field Is Required.',

                'nic_front_back.required' => 'The NIC Front Back Of All Partners Field Is Required.',
                'nic_front_back.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the NIC Front Back.',
                'nic_front_back.*.max' => 'The NIC Front Back file must not be greater than 1 MB in size.',
                
                'blood_relative_cnic.required' => 'The Blood Relative CNIC Field Is Required.',
                'blood_relative_cnic.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Blood Relative CNIC.',
                'blood_relative_cnic.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Blood Relative CNIC.',
                             
                'witness_one_cnic.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Witness 1 CNIC.',
                'witness_one_cnic.*.max' => 'Witness 1  CNIC file must not be greater than 1 MB in size.',
               
                'witness_two_cnic.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Witness 2 CNIC.',
                'witness_two_cnic.*.max' => 'Witness 2  file must not be greater than 1 MB in size.',
                           
            ];
        }
}
