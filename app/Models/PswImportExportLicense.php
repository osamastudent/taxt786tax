<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PswImportExportLicense extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'cnic_copy',
        'mobile_no_registered',
        'email',
        'business_letterhead',
    ];
}
