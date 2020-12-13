@foreach($list_feed as $feed)
<div class="col-sm-12">
	<div class="iq-card iq-card-block iq-card-stretch iq-card-height">
		<div class="iq-card-body">
			<div class="user-post-data">
				<div class="d-flex flex-wrap">
					<div class="media-support-user-img mr-3">
						<img class="rounded-circle img-fluid" src="{{url($feed->user->photo)}}" alt="">
					</div>
					<div class="media-support-info mt-2">
						<h5 class="mb-0 d-inline-block"><a href="#" class="">{{$feed->user->fullname}}</a></h5>
						<p class="mb-0 d-inline-block">Add New Post</p>
						<p class="mb-0 text-primary">{{$feed->created_at->diffForHumans()}}</p>
					</div>
				</div>
			</div>
			<div class="mt-3">
				<p>
					{{nl2br($feed->content)}}
				</p>
			</div>
			@if($feed->image)
			<div class="user-post">
				<div class="d-flex">
					<div class="col-md-12">
						<img src="{{url($feed->image)}}" alt="post-image" class="img-fluid rounded w-100"></a>
					</div>
				</div>
			</div>
			@endif
			<div class="comment-area mt-3">
				<hr>
				<ul class="post-comments p-0 m-0">
					@foreach($feed->comments as $comment)
					<li class="mb-2">
                        <div class="d-flex flex-wrap">
                            <div class="user-img">
                                <img src="{{url($comment->post->user->photo)}}" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                            </div>
                            <div class="comment-data-block ml-3">
                                <h6>{{$comment->post->user->fullname}}</h6>
                                <p class="mb-0">{{$comment->content}}</p>
                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <span>{{$comment->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
				</ul>
				<form class="comment-text comment-form d-flex align-items-center mt-3" data-post-id="{{$feed->uuid}}">
					<input type="text" name="content" class="form-control rounded">
					<div class="comment-attagement d-flex">
						<button class="btn btn-primary">Comment</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach

@push('script')
	<script>
		$(".comment-form").on("submit", function(e){
			e.preventDefault()
			post_id = $(this).data('postId')

			data = []
			$(this).serializeArray().forEach(function(item){
				data[item['name']] = item['value']
			})
			comment_list = $(this).prev()
			$.post(`comment/${post_id}`, $(this).serializeArray()).done(function(item){
				$(comment_list).html(item)
			})
			$(this).find('input').val("")
		})
	</script>
@endpush