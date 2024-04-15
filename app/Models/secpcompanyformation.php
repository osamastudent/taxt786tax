<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secpcompanyformation extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_email',
        'type_registraion',
        'suggested_name',
        'nic_front_back',
        'blood_relative_cnic',
        'mobile_no_registered_cnic',
        'email_registered_cnic',
        'company_address',
        'business_description',
        'witness_one_cnic',
        'witness_two_cnic',
    ];
}
