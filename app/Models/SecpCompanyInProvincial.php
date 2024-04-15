<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecpCompanyInProvincial extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'copy_company_ntn',
        'cnic_copy_partners',
        'mobile_no',
        'email',
        'form_two',
        'incorporation_certificate',
        'moa',
        'aoa',
        'paid_electricity_bill',
        'tenancy_agreement_premises',
        'bank_maintenance_certificate',
 
    ];
}
