<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sharesCapitalGainRequest extends FormRequest
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
            
         'cdc_statement.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
         'stock_broker_statement.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
         'nccpl_capital_gain_tax_certificate.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
         'cdc_dividend_statement.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
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
            'cdc_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the CDC Statement.',
            'cdc_statement.*.max' => 'The CDC Statement file must not be greater than 1 MB in size.',
            
            'stock_broker_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Stock Broker Statement.',
            'stock_broker_statement.*.max' => 'Stock Broker Statement file must not be greater than 1 MB in size.',
            
            'nccpl_capital_gain_tax_certificate.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for NCCPL Capital Gain Tax Certificate.',
            'nccpl_capital_gain_tax_certificate.*.max' => 'NCCPL Capital Gain Tax Certificate file must not be greater than 1 MB in size.',
            
            'stock_broker_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for CDC Dividend Statement ',
            'stock_broker_statement.*.max' => 'CDC Dividend Statement file must not be greater than 1 MB in size.',
        
        ];
    }
}
