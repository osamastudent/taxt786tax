<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmPartnership extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_email',
        'copy_firm_ntn',
        'cnic_copy_partners',
        'mobile_no',
        'email',
        'form_c',
        'partnership_deed',
        'paid_electricity_bill',
        'tenancy_agreement_ownership',
        'documents_business_premises',
        'bank_maintenance_certificate',
    ];
}
