<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalTaxRegistrationRenewal extends Model
{
    use HasFactory;
    protected $fillable=[
        'select_tatus',
        'user_email',
        'certificate_incorporation',
        'ntn_certificate',
        'audited_financial_statements',
        'last_paid_challan',
        'list_contractor',
        'income_tax_returns',
        'list_containing_names_numbers_owners',
    ];
}
