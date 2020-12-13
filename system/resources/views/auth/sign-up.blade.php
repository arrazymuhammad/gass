<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>GASS - Health Platform For Awardee</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="{{url('assets')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url('assets')}}/css/typography.css">
		<link rel="stylesheet" href="{{url('assets')}}/css/style.css">
		<link rel="stylesheet" href="{{url('assets')}}/css/responsive.css">
	</head>
	<body>
		<section class="sign-in-page">
			<div id="container-inside">
				<div id="circle-small"></div>
				<div id="circle-medium"></div>
				<div id="circle-large"></div>
				<div id="circle-xlarge"></div>
				<div id="circle-xxlarge"></div>
			</div>
			<div class="container p-0">
				<div class="row no-gutters">
					<div class="col-md-6 text-center pt-5">
						<div class="sign-in-detail text-white">
							<a class="sign-in-logo mb-5 text-right" href="#">
								<span class="h1 text-white">- GASS -</span><br>
								<span class="h3 text-white">Garuda Asisten Sehat</span>
							</a>
							<div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
								<div class="item">
									<img src="{{url('assets')}}/images/login/1.png" class="img-fluid mb-4" alt="logo">
									<h4 class="mb-1 text-white">Find new friends</h4>
									<p>It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>
								<div class="item">
									<img src="{{url('assets')}}/images/login/2.png" class="img-fluid mb-4" alt="logo"> 
									<h4 class="mb-1 text-white">Connect with the profeesional</h4>
									<p>It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>
								<div class="item">
									<img src="{{url('assets')}}/images/login/3.png" class="img-fluid mb-4" alt="logo">
									<h4 class="mb-1 text-white">Create new events</h4>
									<p>It is a long established fact that a reader will be distracted by the readable content.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 bg-white pt-5">
						<div class="sign-in-from">
							<img src="{{url('assets')}}/images/gass.png" class="img-fluid" alt="logo"><br>
							<h1 class="mb-0">Sign Up</h1>
							<form class="mt-4" method="post">
								@csrf
                                <div class="form-group">
                                    <label>Your Full Name</label>
                                    <input type="text" name="fullname" class="form-control mb-0" placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control mb-0" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control mb-0" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="{{url('login')}}">Log In</a></span>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="{{url('assets')}}/js/jquery.min.js"></script>
		<script src="{{url('assets')}}/js/popper.min.js"></script>
		<script src="{{url('assets')}}/js/bootstrap.min.js"></script>
		<script src="{{url('assets')}}/js/jquery.appear.js"></script>
		<script src="{{url('assets')}}/js/countdown.min.js"></script>
		<script src="{{url('assets')}}/js/waypoints.min.js"></script>
		<script src="{{url('assets')}}/js/jquery.counterup.min.js"></script>
		<script src="{{url('assets')}}/js/wow.min.js"></script>
		<script src="{{url('assets')}}/js/apexcharts.js"></script>
		<script src="{{url('assets')}}/js/lottie.js"></script>
		<script src="{{url('assets')}}/js/slick.min.js"></script>
		<script src="{{url('assets')}}/js/select2.min.js"></script>
		<script src="{{url('assets')}}/js/owl.carousel.min.js"></script>
		<script src="{{url('assets')}}/js/jquery.magnific-popup.min.js"></script>
		<script src="{{url('assets')}}/js/smooth-scrollbar.js"></script>
		<script src="{{url('assets')}}/js/chart-custom.js"></script>
		<script src="{{url('assets')}}/js/custom.js"></script>

	</body>
</html>