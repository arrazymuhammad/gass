<div class="chat-sidebar-channel scroller mt-4 pl-3">
	<h5 class=""><a href="{{url('konsultasi')}}" class="btn btn-primary btn-block">Daftar Praktisi</a></h5>
	<ul class="iq-chat-ui nav flex-column nav-pills">
		@foreach($list_chat as $cl)
		<li>
			<a href="{{url('konsultasi/chat', $cl->chatfriend->uuid)}}">
				<div class="d-flex align-items-center">
					<div class="avatar mr-2">
						<img src="{{url("assets")}}/images/user/05.jpg" alt="chatuserimage" class="avatar-50 ">
						<span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
					</div>
					<div class="chat-sidebar-name">
						<h6 class="mb-0">{{$cl->chatfriend->fullname}}</h6>
						<span></span>
					</div>
				</div>
			</a>
		</li>
		@endforeach
	</ul>
</div>