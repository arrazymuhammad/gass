<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    function post()
    {
    	return $this->belongsTo(Post::class, 'id_post');
    }

}
