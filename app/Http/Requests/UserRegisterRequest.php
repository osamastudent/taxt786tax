<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'mobile_no'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ];
    }



public function messages()
{
    return [

        'password_confirmation.same'=>'same password',
    ];
}

}
