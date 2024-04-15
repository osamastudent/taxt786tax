<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountingBookKeepingService extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_email',
        'entity_status',
        'share_capital',
        'annual_turnover',
        'annual_profit',
        'yearly_number_transaction',
        'year_established',
    ];
}
