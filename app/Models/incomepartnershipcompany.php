<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incomepartnershipcompany extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'fbr_id',
        'fbr_password',
        'bank_statement',
        'financial_statement',
        'business_assets',
    ];
}
