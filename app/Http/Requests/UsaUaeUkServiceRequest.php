<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsaUaeUkServiceRequest extends FormRequest
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
          'select_region'=>'required',
          'mobile_no'=>'required',
          'email'=>'required',
          'social_security_no_tax_no'=>'required',
          'data_birth'=>'required',
          'select_type_service'=>'required',
        ];
    }
}
