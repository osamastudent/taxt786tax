<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaUaeUkService extends Model
{
    use HasFactory;
    protected $fillable=[

       'name',
       'address',
       'select_region',
       'mobile_no',
       'email',
       'social_security_no_tax_no',
       'data_birth',
       'select_type_service',
       
    ];
}
