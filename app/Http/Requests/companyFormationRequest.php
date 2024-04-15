<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class companyFormationRequest extends FormRequest
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
            'proposed_business_activity'=>'required',
            'select_business_type'=>'required',
            'ownership_inf_document'=>'required',
            'initial_capital_contribution'=>'required',
            'proposed_funding_sources'=>'required',
           
        ];
    }
}
