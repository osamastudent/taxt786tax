<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PswImportExportLicenseRequest extends FormRequest
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
            'cnic_copy'=>'required',
            'cnic_copy.*'=>'required',
            'mobile_no_registered'=>'required',
            'email'=>'required',
            'business_letterhead'=>'required',
        ];
    }
}
