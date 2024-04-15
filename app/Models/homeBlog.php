<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeBlog extends Model
{
    use HasFactory;
    protected $fillable=[
                'blog_category_id',
            'blog_image',
            'blog_title',
            'blog_description',
            'views',
    ];

  

public function blogCategoryR(){
    return $this->belongsTo(blogCategory::class,'blog_category_id','id');
    }
}
