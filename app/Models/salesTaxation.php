<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salesTaxation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'name',
        'address',
        'mobile_no',
        'email',
        'tax_id_number',
        'business_type',
        'sales_receipts',
        'invoices',
        'other_documents',
        'any_exemptions_exclusions',
    ];
}
