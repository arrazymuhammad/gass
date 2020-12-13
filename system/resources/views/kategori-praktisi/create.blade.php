@extends('template.base')

@section('content')
<div id="content-page" class="content-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Table Kategori
					</div>
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Nama</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Photo</label><br>
										<input type="file" class="w100 ">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-primary float-right">Save</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection