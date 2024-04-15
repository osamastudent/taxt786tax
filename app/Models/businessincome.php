<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class businessincome extends Model
{
    use HasFactory;
    protected $fillable=[
        'bank_statement',
        'financial_statement',
    ];
}
