<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class monthlytaxretainershipRequest extends FormRequest
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
            'email'=>'required',
            'mobile_no'=>'required',
            'address'=>'required',
            // 'fbr_sales',
            // 'srb_sales',
            // 'pra_sales',
            // 'kpra_sales',
            // 'bra_sales',
            // 'fbr_withholding',
            // 'quarterly_withholding',
            // 'income_sales_planning',
            // 'queries_tax_matters',
        ];
    }
}
