<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salestaxmonthlyRequest extends FormRequest
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




            'select_authority' => 'required',
            'select_year' => 'required',
            'select_month' => 'required',

            'upload_purchase_invoices' => 'required',
            'upload_purchase_invoices.*' => 'required | mimes:pdf,xlx,csv,jpg|max:1024',

            'upload_sales_invoices' => 'required',
            'upload_sales_invoices.*' => 'required | mimes:pdf,xlx,csv,jpg|max:1024',

            'purchase_sheet' => 'required',
            'purchase_sheet.*' => 'required | mimes:pdf,xlx,csv,jpg|max:1024',
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
            'upload_purchase_invoices.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Upload Purchase Invoices.',
            'upload_purchase_invoices.*.max' => 'The Upload Purchase Invoices file must not be greater than 1 MB in size.',

            'upload_sales_invoices.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Upload Sales Invoices.',
            'upload_sales_invoices.*.max' => 'Upload Sales Invoices file must not be greater than 1 MB in size.',

            'purchase_sheet.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for Purchase sheet.',
            'purchase_sheet.*.max' => 'Purchase sheet file must not be greater than 1 MB in size.',


        ];
    }
}
