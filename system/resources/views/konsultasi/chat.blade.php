@extends('template.base')

@section('content')
<div id="content-page" class="content-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="iq-card">
					<div class="iq-card-body chat-page p-0">
						<div class="chat-data-block">
							<div class="row">
								<div class="col-lg-3 chat-data-left scroller">
									@include('konsultasi.chat.chat-user')
									@include('konsultasi.chat.chat-list')
								</div>
								@include('konsultasi.chat.chat-content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection