<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogCategory extends Model
{
    use HasFactory;
    protected $fillable=[
'name',
    ];

    
    public function homeBlogPostR(){
    return $this->hasMany(homeBlog::class,'blog_category_id','id');
    }
}

