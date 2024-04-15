<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecpAnnualExternalAnnualAudit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'company_status',
        'share_capital',
        'annual_turnover',
        'annual_profit',
        'current_auditor',
        'reason_change_auditor',
        'companies_incorporation_year',
    ];


}
