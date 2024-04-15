<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class taxnoticesreplyrepresentaionRequest extends FormRequest
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
            'describe_case' => 'required',

            'upload_notice' => 'required',
            'upload_notice.*' => 'required | mimes:pdf,xlx,csv,jpg|max:1024',

            'fbr_id' => 'required',
            'fbr_password' => 'required',
            'amount_involved' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
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
            'upload_notice.*.mimes' => 'Only PDF, JPG, and JPEG formats are allowed for the Upload Notice.',
            'upload_notice.*.max' => 'The Upload Notice file must not be greater than 1 MB in size.',

        ];
    }
}
