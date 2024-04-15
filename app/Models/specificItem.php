<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specificItem extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'image_heading',
        'item_one',
        'item_two',
        'item_three',
        'item_four',
        'item_five',
        'item_six',
            ];
}
