<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class individual extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_email',
        'copy_ntn',
        'copy_cnic',
        'mobile_no',
        'email',
        'paid_electricity_bill',
        'tenancy_agreement_ownership',
        'documents_business_premises',
        'bank_maintenance_certificate',
    ];
}
