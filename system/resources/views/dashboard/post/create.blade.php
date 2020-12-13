<div class="col-sm-12">
	<div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
		<div class="iq-card-header d-flex justify-content-between">
			<div class="iq-header-title">
				<h4 class="card-title">Bagikan Cerita Terbaru</h4>
			</div>
		</div>
		<div class="iq-card-body">
			<div class="row">
				<div class="col-md-12">
					<form class="post-text" action="{{url('new-post')}}" method="post" enctype="multipart/form-data">
						<div class="d-flex align-items-center">
							@csrf

							<textarea type="text" name="content" class="form-control rounded" placeholder="Bagaimana Harimu {{Auth::user()->fullname}} ... ?" style="border:none; line-height: 1"></textarea>
							<div class="row"></div>
						</div>
						<img class="img-fluid w-100" id="blah"/>
						<hr>
						<ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
							<input type="file" style="display: none" id="photo" name="photo">
							<li onclick="getPhoto()" class="iq-bg-primary rounded p-2 pointer mr-3"><img  src="{{url('assets')}}/images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</li>
						</ul>
						<button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@push('script')
<script>
	function getPhoto(){
		$("#photo").click()
	}
	$("#photo").on("change", function(){
		if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(this.files[0]);
        }
	})
</script>

@endpush