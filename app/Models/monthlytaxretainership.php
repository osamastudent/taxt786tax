<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monthlytaxretainership extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_email',
        'name',
        'email',
        'mobile_no',
        'address',
        'fbr_sales',
        'srb_sales',
        'pra_sales',
        'kpra_sales',
        'bra_sales',
        'fbr_withholding',
        'quarterly_withholding',
        'income_sales_planning',
        'queries_tax_matters',
    ];
}



