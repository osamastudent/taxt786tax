<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salestaxmonthlyfiling extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'select_authority',
        'select_year',
        'select_month',
        'upload_purchase_invoices',
        'upload_sales_invoices',
        'purchase_sheet',
    ];
}
