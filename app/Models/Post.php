<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    //! Image is Postponed to be Added
    protected $fillable = [
        'category_id',
        'title',
        'text',
        // 'image',
    ];
    // protected $appends = ['image_path'];
    // public function getImagePathAttribute()
    // {
    //     return asset('uploads/post_images/' . $this->image);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
