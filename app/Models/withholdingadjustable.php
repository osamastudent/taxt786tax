<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withholdingadjustable extends Model
{
    use HasFactory;
    protected $fillable = [
        'fbr_computerized_payment_slips',
        'tax_on_electricty_bill',
        'mobile_phone_tax_certificate',
        'car_purchase_transfer_annual_tax',
        'any_other_tax_paid',
    ];
}
