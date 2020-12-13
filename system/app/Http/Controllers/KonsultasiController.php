<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatList;
use App\Models\User;
use Faker;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    function index(){
    	return view('konsultasi.index');
    }

    function kategori($kategori)
    {
    	$data['list_dokter'] = User::where('kategori_praktisi', $kategori)->get();
    	return view('konsultasi.kategori', $data);
    }

    function chat($id){
        $id_user = request()->user()->uuid;
        $where = ['id_user_1' => $id_user, 'id_user_2' => $id];
        $chat = ChatList::firstOrCreate($where);
        $chat->chatfriend = ($chat->id_user_1 == $id_user) ? $chat->user2 : $chat->user1;
        $list_chat = ChatList::with('user1', 'user2')->where('id_user_1', $id_user)->orWhere('id_user_2', $id_user)->get();
        $list_chat = $list_chat->map(function($item) use($id_user){
            if($item->id_user_1 == $id_user){
               $item->chatfriend = $item->user2; 
            }else{
               $item->chatfriend = $item->user1;
            }
            return $item;
        });
        $data['chat_content'] = $chat->content; 
        $data['chat'] = $chat;
        $data['list_chat'] = $list_chat;
    	return view('konsultasi.chat', $data);
    }

    function chatAll(){
        $id_user = request()->user()->uuid;
        $list_chat = ChatList::with('user1', 'user2')->where('id_user_1', $id_user)->orWhere('id_user_2', $id_user)->get();
        $list_chat = $list_chat->map(function($item) use($id_user){
            if($item->id_user_1 == $id_user){
               $item->chatfriend = $item->user2; 
            }else{
               $item->chatfriend = $item->user1;
            }
            return $item;
        });
        $data['chat_content'] = [] ; 
        $data['chat'] = [];
        $data['list_chat'] = $list_chat;
        return view('konsultasi.chat', $data);
    }

    function chatProcess(){
        $chat = new Chat;
        $chat->id_chat = request('chatId');
        $chat->id_sender = request('sender');
        $chat->id_receiver = request('receiver');
        $chat->content = request('content');
        $chat->save();
        $chat->sender = $chat->sender;
        $chat->receiver = $chat->receiver;
        return $this->prepareChat($chat);
    }

    function prepareChat($chat){
        $person = ($chat->is_sender) ? $chat->sender : $chat->receiver;
        $chatleft = ($chat->is_sender) ? "" : "chat-left";
        return '<div class="chat '.$chatleft.'">
                    <div class="chat-user">
                        <a class="avatar m-0">
                        <img src="'.url($person->photo).'" alt="avatar" class="avatar-35 ">
                        </a>
                        <span class="chat-time mt-1">'.$chat->created_at->format("H:i").'</span>
                    </div>
                    <div class="chat-detail">
                        <div class="chat-message">
                            <p>'.$chat->content.'</p>
                        </div>
                    </div>
                </div>';
    }
}
