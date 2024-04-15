<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class selectassetsexpenseavailablefromlistRequest extends FormRequest
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
            
           

            'bank_statement.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
            'properties_purchased.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
            'prize_bond' => 'max:3',
            'cash' => 'max:3',
            'gold' => 'max:3',
            'expense_during_the_year' => 'max:3',
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
               
               'stock_broker_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Properties Purchased or sold during the year.',
               'stock_broker_statement.*.max' => 'Properties Purchased or sold during the year file must not be greater than 1 MB in size.',
               
               'nccpl_capital_gain_tax_certificate.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for NCCPL Capital Gain Tax Certificate.',
               'nccpl_capital_gain_tax_certificate.*.max' => 'NCCPL Capital Gain Tax Certificate file must not be greater than 1 MB in size.',
               
               'stock_broker_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for CDC Dividend Statement ',
               'stock_broker_statement.*.max' => 'CDC Dividend Statement file must not be greater than 1 MB in size.',
           
           ];
       }
   }
   