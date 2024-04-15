<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class incomepartnershipcompanyRequest extends FormRequest
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

            'bank_statement'=>'required',
            'bank_statement.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',

            'financial_statement'=>'required',
            'financial_statement.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',       

            'business_assets'=>'required',
            'business_assets.*'=>'required | mimes:pdf,xlx,csv,jpg|max:1024',
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
                'bank_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Bank Statement.',
                'bank_statement.*.max' => 'The Bank Statement file must not be greater than 1 MB in size.',
                
                'financial_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Financial Statements.',
                'financial_statement.*.max' => 'Financial Statements file must not be greater than 1 MB in size.',
                
                'business_assets.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Business Assets Details.',
                'business_assets.*.max' => 'Business Assets Details file must not be greater than 1 MB in size.',
                
                
            ];
        }
}
