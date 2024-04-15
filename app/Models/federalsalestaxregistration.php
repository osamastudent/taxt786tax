<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class federalsalestaxregistration extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'fbr_id',
        'fbr_password',
        'electricity_bill',
        'bank_account_maintenance_certificate',
        'business_premises_picture',
    ];
}
