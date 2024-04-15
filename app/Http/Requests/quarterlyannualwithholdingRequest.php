<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class quarterlyannualwithholdingRequest extends FormRequest
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
            'fbr_id' => 'required',
            'fbr_password' => 'required',
            'invoices' => 'required',
            'invoices.*' => 'required | mimes:pdf,xlx,csv,jpg|max:1024',
            'employees_salary_sheet' => 'required',
            'employees_salary_sheet.*' => 'required | mimes:pdf,xlx,csv,jpg|max:1024',
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
            
            'invoices.*.mimes' => 'Only PDF, JPG formats are allowed for the invoices .',
            'invoices.*.max' => 'The invoices file must not be greater than 1 MB in size.',
            
            'employees_salary_sheet.*.mimes' => 'Only PDF, JPG formats are allowed for the Employees Salary Sheet.',
            'employees_salary_sheet.*.max' => 'The Employees Salary Sheet file must not be greater than 1 MB in size.',
        ];
    }
}
