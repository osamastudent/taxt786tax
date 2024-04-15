<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salesTaxationRequest extends FormRequest
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
            'name'=>'required',
            'address'=>'required',
            'mobile_no'=>'required',
            'email'=>'required',
            'tax_id_number'=>'required',
            'business_type'=>'required',
            'sales_receipts'=>'required',
            'invoices'=>'required',
            'other_documents'=>'required',
            'any_exemptions_exclusions'=>'required',
        ];
    }
}
