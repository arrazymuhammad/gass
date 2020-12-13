<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>GASS</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="{{url('assets')}}/images/gass.png" />
      <link rel="stylesheet" href="{{url('assets')}}/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{url('assets')}}/css/typography.css">
      <link rel="stylesheet" href="{{url('assets')}}/css/style.css">
      <link rel="stylesheet" href="{{url('assets')}}/css/responsive.css">
      <style>
         .iq-footer {
            width: calc(100vw - 260px) !important;
         }
      </style>
   </head>
   <body class="right-sidebar-close">
      <div class="wrapper">
         @include('template.section.sidebar')
         @include('template.section.top-navbar')
         @yield('content')
         @include('template.section.footer')
      </div>
      <script src="{{url('assets')}}/js/jquery.min.js"></script>
      <script src="{{url('assets')}}/js/popper.min.js"></script>
      <script src="{{url('assets')}}/js/bootstrap.min.js"></script>
      <script src="{{url('assets')}}/js/jquery.appear.js"></script>
      <script src="{{url('assets')}}/js/countdown.min.js"></script>
      <script src="{{url('assets')}}/js/waypoints.min.js"></script>
      <script src="{{url('assets')}}/js/jquery.counterup.min.js"></script>
      <script src="{{url('assets')}}/js/wow.min.js"></script>
      <script src="{{url('assets')}}/js/apexcharts.js"></script>
      <script src="{{url('assets')}}/js/slick.min.js"></script>
      <script src="{{url('assets')}}/js/select2.min.js"></script>
      <script src="{{url('assets')}}/js/owl.carousel.min.js"></script>
      <script src="{{url('assets')}}/js/jquery.magnific-popup.min.js"></script>
      <script src="{{url('assets')}}/js/smooth-scrollbar.js"></script>
      <script src="{{url('assets')}}/js/lottie.js"></script>
      <script src="{{url('assets')}}/js/core.js"></script>
      <script src="{{url('assets')}}/js/charts.js"></script>
      <script src="{{url('assets')}}/js/animated.js"></script>
      <script src="{{url('assets')}}/js/kelly.js"></script>
      <script src="{{url('assets')}}/js/maps.js"></script>
      <script src="{{url('assets')}}/js/worldLow.js"></script>
      <script src="{{url('assets')}}/js/chart-custom.js"></script>
      <script src="{{url('assets')}}/js/custom.js"></script>

      <script>
         
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': '{{csrf_token()}}'
             }
         });
      </script>
      @stack("script")
   </body>
</html>
