@extends('template.base')

@section('content')

<div id="content-page" class="content-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 row m-0 p-0">
				@include('dashboard.post.create')
				@include('dashboard.post.list')
			</div>
			<div class="col-lg-4">
				<div class="iq-card">
					<div class="iq-card-header d-flex justify-content-between">
						<div class="iq-header-title">
							<h4 class="card-title">Events</h4>
						</div>
						<div class="iq-card-header-toolbar d-flex align-items-center">
							<div class="dropdown">
								<span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
								<i class="ri-more-fill"></i>
								</span>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
									<a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>Create New Event</a>
									<a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>See My Event</a>
								</div>
							</div>
						</div>
					</div>
					<div class="iq-card-body">
						<ul class="media-story m-0 p-0">
							<li class="d-flex mb-4 align-items-center ">
								<img src="{{url('assets')}}/images/page-img/s4.jpg" alt="story-img" class="rounded-circle img-fluid">
								<div class="stories-data ml-3">
									<h5>Web Workshop</h5>
									<p class="mb-0">1 hour ago</p>
								</div>
							</li>
							<li class="d-flex align-items-center">
								<img src="{{url('assets')}}/images/page-img/s5.jpg" alt="story-img" class="rounded-circle img-fluid">
								<div class="stories-data ml-3">
									<h5>Fun Events and Festivals</h5>
									<p class="mb-0">1 hour ago</p>
								</div>
							</li>
						</ul>

						<a href="#" class="btn btn-primary d-block mt-3">See All</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection