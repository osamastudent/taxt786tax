<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quarterlyannualwithholding extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'fbr_id',
        'fbr_password',
        'invoices',
        'employees_salary_sheet',
    ];
}
