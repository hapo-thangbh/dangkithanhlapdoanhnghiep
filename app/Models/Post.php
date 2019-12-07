<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable=[
        'title',
        'description_short',
        'image_thumb',
        'category_id',
        'description',
        'status',
        'view'
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
