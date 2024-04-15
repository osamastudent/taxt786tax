<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taxnoticesreplyrepresentaion extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'describe_case',
        'upload_notice',
        'fbr_id',
        'fbr_password',
        'amount_involved',
        'mobile_no',
        'email',
    ];
}
