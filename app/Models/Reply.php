<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $fillable=[
        'title',
        'comment_id',
        'user_id',
        'description'
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
