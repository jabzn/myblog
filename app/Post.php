<?php

namespace App;

use App\Category;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'image',
        'category_id',
        'slug',
        'body',
    ];

    public function getImageAttribute($value)
    {
        return $value 
            ? asset('storage/' . 'images/' . $value) 
            : asset('storage/images/no-image.jpg');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
