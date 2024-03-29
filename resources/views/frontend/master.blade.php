<!DOCTYPE html>
<html lang="l{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - @yield('title')</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{asset('frontend')}}/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('frontend')}}/img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('frontend')}}/img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('frontend')}}/img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('frontend')}}/img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
	<link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
	<link href="{{asset('frontend')}}/css/menu.css" rel="stylesheet">
	<link href="{{asset('frontend')}}/css/vendors.css" rel="stylesheet">
	<link href="{{asset('frontend')}}/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="{{asset('frontend')}}/css/date_picker.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('frontend')}}/css/custom.css" rel="stylesheet">
	
	<!-- Modernizr -->
	<script src="{{asset('frontend')}}/js/modernizr.js"></script>
	
     

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

    <header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="/" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<ul id="top_access">
						<li><a href="login.html"><i class="pe-7s-user"></i></a></li>
						<li><a href="register-doctor.html"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="#0" class="show-submenu">Home<i class="icon-down-open-mini"></i></a>
								<ul>
									<!-- <li><a href="index.html">Home Default</a></li> -->
									<li><a href="index-2.html">Home </a></li>
									<!-- <li><a href="index-3.html">Home Version 3</a></li>
									<li><a href="index-4.html">Home Version 4</a></li>
                                    <li><a href="index-6.html">Revolution Slider</a></li>
									<li><a href="index-5.html">With Cookie Bar (EU law)</a></li> -->
								</ul>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="list.html">List page</a></li>
									<!-- <li><a href="grid-list.html">List grid page</a></li> -->
									<!-- <li><a href="list-map.html">List map page</a></li> -->
									<li><a href="detail-page.html">Detail page</a></li>
									<!-- <li><a href="detail-page-2.html">Detail page 2</a></li> -->
                                    <li><a href="detail-page-3.html">Detail page 3</a></li>
									<li><a href="blog-1.html">Blog</a></li>
									<!-- <li><a href="badges.html">Badges</a></li> -->
									<li><a href="login.html">Login</a></li>
									<!-- <li><a href="login-2.html">Login 2</a></li> -->
									<li><a href="register-doctor.html">Register Doctor</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="contacts.html">Contacts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Extra Elements<i class="icon-down-open-mini"></i></a>
								<ul>
                                	<li><a href="detail-page-working-booking.html">Detail working booking</a></li>
                                    <li><a href="booking-page.html">Booking page</a></li>
                                    <li><a href="confirm.html">Confirm page</a></li>
                                	<li><a href="faq.html">Faq page</a></li>
                                    <li><a href="coming_soon/index.html">Coming soon</a></li>
                                     <li><a href="pricing-tables.html">Responsive pricing tables</a></li>
                                     <li><a href="pricing-tables-2.html">Responsive pricing tables 2</a></li>
                                     <li><a href="register-doctor-working.html">Working doctor register</a></li>
									<li><a href="icon-pack-1.html">Icon pack 1</a></li>
									<li><a href="icon-pack-2.html">Icon pack 2</a></li>
									<li><a href="icon-pack-3.html">Icon pack 3</a></li>
									<!-- <li><a href="404.html">404 page</a></li> -->
								</ul>
							</li>
							
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->	
	
	@yield('content', 'Default content')
	<!-- /main content -->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="index.html" title="Findoctor">
							<img src="img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Doctors</a></li>
						<li><a href="#0">Clinics</a></li>
						<li><a href="#0">Specialization</a></li>
						<li><a href="#0">Join as a Doctor</a></li>
						<li><a href="#0">Download App</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@findoctor.com</a></li>
					</ul>
					<div class="follow_us">
						<h5>Follow us</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2017 Findoctor</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('frontend')}}/js/jquery-2.2.4.min.js"></script>
	<script src="{{asset('frontend')}}/js/common_scripts.min.js"></script>
	<script src="{{asset('frontend')}}/js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('frontend')}}/js/video_header.js"></script>
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
<!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('frontend')}}/js/bootstrap-datepicker.js"></script>
    <script>
			$('#calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
			    format: "yyyy-mm-dd",
    			datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
			});
	</script>
</body>

</html>