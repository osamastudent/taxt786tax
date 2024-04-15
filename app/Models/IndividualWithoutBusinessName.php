<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualWithoutBusinessName extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'personal_ntn',
        'cnic_both_sides',
        'personal_bank_account_letter_certificate',
    ];
}
