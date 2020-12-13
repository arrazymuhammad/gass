<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatList extends Model
{
	protected $table = 'chatlist';
	protected $fillable = ['id_user_1', 'id_user_2'];

	function user1(){
		return $this->belongsTo(User::class, 'id_user_1');
	}
	function user2(){
		return $this->belongsTo(User::class, 'id_user_2');
	}

	function chat(){
		return $this->hasMany(Chat::class, 'id_chat');
	}
}
