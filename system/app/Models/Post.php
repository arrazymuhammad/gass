<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\User;

class Post extends Model
{
	function user(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function comments()
	{
		return $this->hasMany(Comment::class, 'id_post');
	}
}
