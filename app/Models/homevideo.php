<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homevideo extends Model
{
    use HasFactory;
    protected $fillable=[
                'video_category_id',
            'video_link',
            'video_image',
            'video_title',
            'video_description',
            'views',
    ];


    public function videoCategoryR(){
    return $this->belongsTo(blogCategory::class,'video_category_id','id');
    }
}
