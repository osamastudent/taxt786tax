<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class intellectualPropertyRegistrationRequest extends FormRequest
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
            'trademark'=>'required',
            'copyright'=>'required',
            'patent'=>'required',
            'iso_certification'=>'required',
            'halal_certification'=>'required',
            'other_certification_approval'=>'required',
            'business_name'=>'required',
            'yearly_revenue'=>'required',
            'yearly_profit'=>'required',
            'ntn_copy'=>'required',
            'visiting_card'=>'required',
            'products'=>'required',
            'business_description'=>'required',
            'pics_working_area'=>'required',
            'tax_return'=>'required',
        ];
    }
}
