<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class withholdingAdjustableRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
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
            'fbr_computerized_payment_slips' => 'required',
            'fbr_computerized_payment_slips.*' => 'mimes:pdf,xlx,csv,jpg,jpeg|max:1024',
            'tax_on_electricty_bill' => 'required',
            'tax_on_electricty_bill.*' => 'mimes:pdf,xlx,csv,jpg,jpeg,webp|max:1024',
            'mobile_phone_tax_certificate' => 'required',
            'mobile_phone_tax_certificate.*' => 'mimes:pdf,xlx,csv,jpg,jpeg,webp|max:1024',
            'car_purchase_transfer_annual_tax' => 'required',
            'car_purchase_transfer_annual_tax.*' => 'mimes:pdf,xlx,csv,jpg,jpeg,webp|max:1024',
            'any_other_tax_paid' => 'required',
            'any_other_tax_paid.*' => 'mimes:pdf,xlx,csv,jpg,jpeg,webp|max:1024',
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
            'fbr_computerized_payment_slips.*.mimes' => 'Only PDF, JPG, and JPEG, WEBP formats are allowed for the FBR Computerized payment slips.',
            'fbr_computerized_payment_slips.*.max' => 'The FBR Computerized payment slips file must not be greater than 1 MB in size.',

            'tax_on_electricty_bill.*.mimes' => 'Only PDF, JPG, and JPEG, WEBP formats are allowed for the Tax on Electricty Bill.',
            'tax_on_electricty_bill.*.max' => 'The Tax on Electricty Bill file must not be greater than 1 MB in size.',

            'mobile_phone_tax_certificate.*.mimes' => 'Only PDF, JPG, and JPEG, WEBP formats are allowed for the Mobile Phone Tax Certificate.',
            'mobile_phone_tax_certificate.*.max' => 'The Mobile Phone Tax Certificate file must not be greater than 1 MB in size.',

            'car_purchase_transfer_annual_tax.*.mimes' => 'Only PDF, JPG, and JPEG, WEBP formats are allowed for the Car Purchase/transfer/annual tax.',
            'car_purchase_transfer_annual_tax.*.max' => 'The Car Purchase/transfer/annual tax file must not be greater than 1 MB in size.',

            'any_other_tax_paid.*.mimes' => 'Only PDF, JPG, and JPEG, WEBP formats are allowed for the Any other tax paid.',
            'any_other_tax_paid.*.max' => 'The Any other tax paid file must not be greater than 1 MB in size.',

            
        ];
    }
}


