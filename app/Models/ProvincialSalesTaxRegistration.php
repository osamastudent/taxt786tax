<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvincialSalesTaxRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'SRB',
        'PRA',
        'KPRA',
        'BRA',
        'select-status',
    ];
}
