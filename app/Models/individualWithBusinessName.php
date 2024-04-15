<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class individualWithBusinessName extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'business_ntn',
        'cnic_all_directors',
        'passports_directors',
        'memorandum_articles',
        'form_twentynine',
        'incorporation_certificate',
        'partnership_deed',
        'firm_registration_certificate',
        'business_bank_statement',
    ];
}
