<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salaryincome extends Model
{
    use HasFactory;
    protected $fillable = [
        'salary_tax_certificate',
        'salary_slip',
    ];
    
}
