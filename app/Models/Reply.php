<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'replies';
    protected $fillable=[
        'title',
        'comment_id',
        'description'
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
