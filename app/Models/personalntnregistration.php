<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalntnregistration extends Model
{
    protected $fillable=[
        'user_email',
        'cnic_number',
        'mobile_no',
        'mobile_network',
        'email',
        'postal_address',
    ];

    //  protected $casts = [
    //     'postal_address' => 'array', // Adjust this to match your actual data type
    // ];
    use HasFactory;
}
