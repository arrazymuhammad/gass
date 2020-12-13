<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Auth;
class Chat extends Model
{
	protected $table = 'chat';

	function sender(){
		return $this->belongsTo(User::class, 'id_sender');
	}

	function receiver(){
		return $this->belongsTo(User::class, 'id_receiver');
	}

	function getIsSenderAttribute(){
		return Auth::user()->uuid == $this->id_sender;
	}
}
