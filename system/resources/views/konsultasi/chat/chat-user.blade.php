<div class="chat-search pt-3 pl-3">
	<div class="d-flex align-items-center">
		<div class="chat-profile mr-3">
			<img src="{{url(Auth::user()->photo)}}" alt="chat-user" class="avatar-60 ">
		</div>
		<div class="chat-caption">
			<h5 class="mb-0">{{Auth::user()->fullname ?? "User"}}</h5>
			<p class="m-0">{{Auth::user()->is_praktisi ? Auth::user()->kategori_praktisi : ""}}</p>
		</div>
		<button type="submit" class="close-btn-res p-3"><i class="ri-close-fill"></i></button>
	</div>
	<hr>
</div>