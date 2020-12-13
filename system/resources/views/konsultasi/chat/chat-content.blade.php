<div class="col-lg-9 chat-data p-0 chat-data-right">
	@if(!$chat)
	<div class="chat-start">
     	<span class="iq-start-icon text-primary"><i class="ri-message-3-line"></i></span>
     	<button id="chat-start" class="btn bg-white mt-3">Start Conversation!</button>
  	</div>
  	@else
	<div class="chat-head">
		<header class="d-flex justify-content-between align-items-center bg-white pt-3 pr-3 pb-3">
			<div class="d-flex align-items-center">
				<div class="sidebar-toggle">
					<i class="ri-menu-3-line"></i>
				</div>
				<div class="avatar chat-user-profile m-0 mr-3">
					<img src="{{url($chat->chatfriend->photo)}}" alt="avatar" class="avatar-50 ">
					<span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
				</div>
				<h5 class="mb-0">{{$chat->chatfriend->fullname}}</h5>
			</div>
			<div class="chat-user-detail-popup scroller">
				<div class="user-profile text-center">
					<button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
					<div class="user mb-4">
						<a class="avatar m-0">
						<img src="{{url($chat->chatfriend->photo)}}" alt="avatar">
						</a>
						<div class="user-name mt-4">
							<h4>{{$chat->chatfriend->fullname}}</h4>
						</div>
						<div class="user-desc">
							<p>{{$chat->chatfriend->alamat}}</p>
						</div>
					</div>
					<hr>
				</div>
			</div>
			<div class="chat-header-icons d-flex">
				<a href="javascript:void();" class="chat-icon-phone iq-bg-primary">
				<i class="ri-phone-line"></i>
				</a>
				<a href="javascript:void();" class="chat-icon-video iq-bg-primary">
				<i class="ri-vidicon-line"></i>
				</a>
				<a href="javascript:void();" class="chat-icon-delete iq-bg-primary">
				<i class="ri-delete-bin-line"></i>
				</a>
				<span class="dropdown iq-bg-primary">
				<i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer pr-0" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
				<span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
				<a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
				<a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
				<a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
				</span>
				</span>
			</div>
		</header>
	</div>
	<div class="chat-content scroller" id="chat-content">
		@foreach($chat->chat->sortBy('created_at') as $ch)
		@php
			$person = $ch->is_sender ? $ch->sender : $ch->receiver;
		@endphp
		<div class="chat {{($ch->is_sender) ? "" : "chat-left"}}">
			<div class="chat-user">
				<a class="avatar m-0">
				<img src="{{url($person->photo)}}" alt="avatar" class="avatar-35 ">
				</a>
				<span class="chat-time mt-1">{{$ch->created_at->format("H:i")}}</span>
			</div>
			<div class="chat-detail">
				<div class="chat-message">
					<p>{{$ch->content}}</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="chat-footer p-3 bg-white">
		<form class="d-flex align-items-center" id="chatform" data-chat="{{$chat->uuid}}" data-sender="{{Auth::user()->uuid}}" data-receiver="{{$chat->chatfriend->uuid}}">
			<input type="text" id="chat_content" class="form-control mr-3" name="content" placeholder="Type your message">
			<button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
		</form>
	</div>
	@endif
</div>


@push('script')
	<script>
		$("#chatform").on('submit', function(e){
			e.preventDefault()
			chatId = $(this).data('chat')
			sender = $(this).data('sender')
			receiver = $(this).data('receiver')
			content = $("#chat_content").val()

			data = {
				sender, receiver, content, chatId
			}
			$.post(`{{url('konsultasi/chat')}}`, data).done(function(item){
				$("#chat-content").append(item)
			})
			$(this).find('input').val("")
		})
	</script>
@endpush