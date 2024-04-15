<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyFormation extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'name',
        'address',
        'mobile_no',
        'email',
        'proposed_business_activity',
        'select_business_type',
        'ownership_inf_document',
        'initial_capital_contribution',
        'proposed_funding_sources',
    ];
}
