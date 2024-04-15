<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentincome extends Model
{
    use HasFactory;
    protected $fillable=[
        'rent_agreement',
    ];
}
