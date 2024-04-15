<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soleproprietorbusinessntnregistration extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'cnic_number',
        'mobile_no',
        'mobile_network',
        'email',
        'business_name',
        'start_date',
        'business_activity_description',
        'business_address_electricity_bill',
        'sales_tax_registration_required',
        'picture_business_premises',
        'paid_utility_bill',
    ];
}
