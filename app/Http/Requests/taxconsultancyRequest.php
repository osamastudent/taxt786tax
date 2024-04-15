<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class taxconsultancyRequest extends FormRequest
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
            'describe_query'=>'required',
            'mobile_no'=>'required',
            'email'=>'required',
        ];
    }

     /**
     * Get the custom validation  that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
     {
        return [
            // 'describe_query'=>'required',
            // 'mobile_no'=>'required',
            // 'email'=>'required',
        ];
    }
}
