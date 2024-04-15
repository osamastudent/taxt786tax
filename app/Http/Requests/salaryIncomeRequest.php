<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salaryIncomeRequest extends FormRequest
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
           // 'salary_tax_certificate' => 'required',
        'salary_tax_certificate.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
        // 'salary_slip' => 'required',
        'salary_slip.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
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
            'salary_tax_certificate.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the salary tax certificate.',
            'salary_tax_certificate.*.max' => 'The salary tax certificate file must not be greater than 1 MB in size.',
            'salary_slip.*.required' => 'The salary slip file is required.',
            'salary_slip.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the salary slip.',
            'salary_slip.*.max' => 'The salary slip file must not be greater than 1 MB in size.',
        ];
    }
}