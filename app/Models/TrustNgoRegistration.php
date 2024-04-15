<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustNgoRegistration extends Model
{
    use HasFactory;
    
    protected  $fillable=[
        'registration_type',
        'user_email',
        'name',
        'estimate_yearly_donation',
        'foreign_funding',
        'description',
    ];
}
