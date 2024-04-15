<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsebRegistration extends Model
{
    use HasFactory;
    protected $fillable=['registration_type'];
}
