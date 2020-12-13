<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function newsfeed(){
    	$data['list_feed'] = Post::orderBy('created_at', 'desc')->get();
    	return view('dashboard.newsfeed', $data);
    }

    function newPost()
    {
    	$post = new Post;
    	$post->id_user = request()->user()->uuid;
    	$post->content = request('content');
    	$post->save();

    	if(request()->hasFile('photo')){
            $destination = "/images/posts";
    		$extension = request()->file('photo')->extension();
            $url = request()->file('photo')->storeAs($destination, $post->uuid.".".time().".".$extension);
            $post->image = "app/".$url;
            $post->save();
    	}

    	return redirect('newsfeed');
    }

    function comment(Post $post)
    {
    	$comment = new Comment;
    	$comment->id_user = request()->user()->uuid;
    	$comment->id_post = $post->uuid;
    	$comment->content = request('content');
    	$comment->save();

    	return $post->comments->sortBy('created_at')->map(function($item){
            $item->user = $item->post->user;
            return $this->prepareComment($item);
        })->implode(" ");
    }

    function prepareComment($comment){
        return '<li class="mb-2">
                        <div class="d-flex flex-wrap">
                            <div class="user-img">
                                <img src="'.url($comment->post->user->photo).'" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                            </div>
                            <div class="comment-data-block ml-3">
                                <h6>'.$comment->post->user->fullname.'</h6>
                                <p class="mb-0">'.$comment->content.'</p>
                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <span>'.$comment->created_at->diffForHumans().'</span>
                                </div>
                            </div>
                        </div>
                    </li>';
    }
}
