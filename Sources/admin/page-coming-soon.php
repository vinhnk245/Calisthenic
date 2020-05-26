<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2019</title>
	<meta name="description" content="">
	<link rel="stylesheet" href="assets/css/coming-soon.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/countdown.js"></script>

	<!-- Font Awesome CSS -->
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<script>
	$(document).ready(function() {
		"use strict";
		// Scroll
		$('.backtotop a').bind('click',function(event){
			var $anchor = $(this);
			$('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top }, 500,'easeInOutExpo');
			event.preventDefault();
		});
		
		$("#countdown").countdown({
			date: "5 february 2019 00:00:00", // Enter date here
			format: "on"
		});
	});
	</script>
</head>

<body id="backtotop" style="margin: 0">

	<div class="fullwidth clearfix">
		<div id="topcontainer" class="bodycontainer clearfix">
			
			<p><span class="fa fa-bullhorn"></span></p>
			<h1><span>Tet...</span></h1>
			<!-- <h1><span>We are coming soon</span></h1> -->
			<!-- <p>2019 of V21</p> -->
			
		</div>
	</div>

	<div class="arrow-separator arrow-white"></div>

	<div class="fullwidth colour1 clearfix">
		<div id="countdown" class="bodycontainer clearfix">

			<div id="countdowncont" class="clearfix">
				<ul id="countscript">
					<li>
						<span class="days">00</span>
						<p>Days</p>
					</li>
					<li>
						<span class="hours">00</span>
						<p>Hours</p>
					</li>
					<li class="clearbox">
						<span class="minutes">00</span>
						<p>Minutes</p>
					</li>
					<li>
						<span class="seconds">00</span>
						<p>Seconds</p>
					</li>
				</ul>
			</div>
		
		</div>
	</div>

	<div class="arrow-separator arrow-theme"></div>

	<!-- <div class="fullwidth colour2 clearfix">
		<div id="maincont" class="bodycontainer clearfix">		
			<h2>Sign up to newsletter to know when we launch</h2>
			<p>If you would want to receive news please subscribe to our newsletter:</p>
			<div id="signupform" class="sb-search clearfix">
				<form method="post" id="contact" class="clearfix">
					<input class="sb-search-input" placeholder="Enter your email" type="text" value="">
					<input class="sb-search-submit" value="" type="submit">
					<button class="formbutton" type="submit"><span class="fa fa-search"></span></button>
				</form>
			</div>
		
		</div>
	</div>

	<div class="arrow-separator arrow-themelight"></div> -->


	<div class="fullwidth colour2 clearfix">
		<div id="footercont" class="bodycontainer clearfix">

			<!-- <p class="backtotop"><a title="" href="#backtotop"><i class="fa fa-angle-double-up"></i></a></p> -->
			<p class="text-white">Follow me </p>
			<div id="socialmedia" class="clearfix">
				<ul>
					<li class="">
						<a target="_blank" style="color: #4267FD;" href="https://www.facebook.com/v21.official" rel="external">
							<i class="fa fa-facebook-official"></i>
						</a>
					</li>
					<li class="">
						<a target="_blank" style="color: #993d00;" href="https://www.instagram.com/v21official/" rel="external">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li class="pr-4">
						<a target="_blank" style="color: red;" href="https://www.youtube.com/channel/UC5Iy1dgJvDADSVZRZM6FSJg" rel="external">
							<i class="fa fa-youtube-play"></i>
						</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>



	<!-- <div class="arrow-separator arrow-themelight"></div>

	<div class="fullwidth clearfix">
		<div id="footercont" class="bodycontainer clearfix">

			 <p class="backtotop"><a title="" href="#backtotop"><i class="fa fa-angle-double-up"></i></a></p>
			<p>Follow me </p>
			<div id="socialmedia" class="clearfix">
				<ul>
					<li><a target="_blank" href="https://www.facebook.com/v21.official" rel="external"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="https://www.instagram.com/v21official/" rel="external"><i class="fa fa-instagram"></i></a></li>
					<li><a target="_blank" href="https://www.youtube.com/channel/UC5Iy1dgJvDADSVZRZM6FSJg" rel="external"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
			</div>
			
		</div> -->
	</div>
   
</body>
</html>