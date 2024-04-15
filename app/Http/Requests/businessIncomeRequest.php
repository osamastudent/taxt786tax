<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class businessIncomeRequest extends FormRequest
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
           // 'bank_statement' => 'required',
        'bank_statement.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
        
        // 'financial_statement' => 'required',
        'financial_statement.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
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
            'bank_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Bank Statement .',
            'bank_statement.*.max' => 'The Bank Statement file must not be greater than 1 MB in size.',
            
            'financial_statement.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Financial statements.',
            'financial_statement.*.max' => 'The Financial statements file must not be greater than 1 MB in size.',
        ];
    }
}
