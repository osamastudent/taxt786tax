<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExternalAnnualAuditRequest extends FormRequest
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
            'company_status'=>'required',
        'share_capital'=>'required',
        'annual_turnover'=>'required',
        'annual_profit'=>'required',
        'current_auditor'=>'required',
        'reason_change_auditor'=>'required',
        'companies_incorporation_year'=>'required',
        ];
    }
}
