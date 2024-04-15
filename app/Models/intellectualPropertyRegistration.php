<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class intellectualPropertyRegistration extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_email',
        'trademark',
        'copyright',
        'patent',
        'iso_certification',
        'halal_certification',
        'other_certification_approval',
        'business_name',
        'yearly_revenue',
        'yearly_profit',
        'ntn_copy',
        'visiting_card',
        'products',
        'business_description',
        'pics_working_area',
        'tax_return',
    ];
}
