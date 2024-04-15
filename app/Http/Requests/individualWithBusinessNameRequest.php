<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class individualWithBusinessNameRequest extends FormRequest
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
            'business_ntn'=>'required',
            'business_ntn.*'=>'required',
            'cnic_all_directors'=>'required',
            'cnic_all_directors.*'=>'required',
            'passports_directors'=>'required',
            'passports_directors.*'=>'required',
            'memorandum_articles'=>'required',
            'memorandum_articles.*'=>'required',
            'form_twentynine'=>'required',
            'form_twentynine.*'=>'required',
            'incorporation_certificate'=>'required',
            'incorporation_certificate.*'=>'required',
            'partnership_deed'=>'required',
            'partnership_deed.*'=>'required',
            'firm_registration_certificate'=>'required',
            'firm_registration_certificate.*'=>'required',
            'business_bank_statement'=>'required',
            'business_bank_statement.*'=>'required',

        ];
    }
}
