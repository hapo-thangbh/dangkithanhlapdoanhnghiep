<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable=[
        'user_id',
        'post_id',
        'description',
        'status'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }
}
