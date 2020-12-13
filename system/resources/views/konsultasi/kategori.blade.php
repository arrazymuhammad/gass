@extends('template.base')

@section('content')
<div id="content-page" class="content-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="iq-card">
					<div class="iq-card-body">
						<a href="{{url('konsultasi')}}" class="btn btn-white"><i class="fa fa-chevron-left"></i></a> Kembali
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($list_dokter as $dokter)
			<div class="col-md-6">
				<div class="iq-card">
					<div class="iq-card-body profile-page p-0">
						<div class="profile-header-image">
							<div class="cover-container">
								<img src="{{url('assets')}}/images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid w-100">
							</div>
							<div class="profile-info p-4">
								<div class="user-detail">
									<div class="d-flex flex-wrap justify-content-between align-items-start">
										<div class="profile-detail d-flex">
											<div class="profile-img pr-4">
												<img src="{{url($dokter->photo)}}" alt="profile-img" class="avatar-130 img-fluid" />
											</div>
											<div class="user-data-block">
												<h4 class="">{{$dokter->fullname}}</h4>
												<p>Dokter Umum</p>
												<p><i class="fa fa-map-marker"></i> {{$dokter->alamat}}</p>
											</div>
										</div>
									</div>
									<a href="{{url('konsultasi/chat', $dokter->uuid)}}" class="btn btn-primary btn-block">Mulai Konsultasi</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection