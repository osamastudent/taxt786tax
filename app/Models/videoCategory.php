<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videoCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];

    public function homeVideoR(){
        return $this->hasMany(homevideo::class,'video_category_id','id');
        }
}
