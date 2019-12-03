<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable=[
        'title','image_thumb','category_id','description','status','view'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
