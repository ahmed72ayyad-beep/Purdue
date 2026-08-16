@extends('Layouts.app2')
@section('Title')
Instractor
@endsection
@section('Content')
<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Instructor</h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / Instructor</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->
</div><!-- END  TOP HEADER CLASS -->

<!-- START TEAM-->
<section class="team_member section-padding">
	<div class="container">
		<div class="section-title">
			<h4>Our Instructor</h4>
			<h1>Our Expert Instructors</h1>
		</div>
		<div class="row text-center">
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="our-team">
					<div class="team-content">
						<h3 class="title">Stephen Cronin</h3>
						<span class="post">Designer</span>
						<div class="sth_det2">
							<span class="ti-file"> <u>5 Course</u></span>
							<span class="ti-user"> <u>12 Student</u></span>
						</div>
					</div>
					<div class="team_img">
						<img src="{{asset('assets/images/team/1.jpg')}}" alt="team-image">
						<ul class="social">
							<li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>

				</div>
			</div><!--- END COL -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="our-team">
					<div class="team_img">
						<img src="{{asset('assets/images/team/2.jpg')}}" alt="team-image">
						<ul class="social">
							<li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
					<div class="team-content">
						<h3 class="title">Rachel Park</h3>
						<span class="post">Developer</span>
						<div class="sth_det2">
							<span class="ti-file"> <u>19 Course</u></span>
							<span class="ti-user"> <u>41 Student</u></span>
						</div>
					</div>
				</div>
			</div><!--- END COL -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="our-team">
					<div class="team-content">
						<h3 class="title">Dan Billson</h3>
						<span class="post">Marketer</span>
						<div class="sth_det2">
							<span class="ti-file"> <u>14 Course</u></span>
							<span class="ti-user"> <u>33 Student</u></span>
						</div>
					</div>
					<div class="team_img">
						<img src="{{asset('assets/images/team/3.jpg')}}" alt="team-image">
						<ul class="social">
							<li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div><!--- END COL -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
				<div class="our-team">
					<div class="team_img">
						<img src="{{asset('assets/images/team/4.jpg')}}" alt="team-image">
						<ul class="social">
							<li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
					<div class="team-content">
						<h3 class="title">Gina Mellow</h3>
						<span class="post">Co-founder</span>
						<div class="sth_det2">
							<span class="ti-file"> <u>11 Course</u></span>
							<span class="ti-user"> <u>27 Student</u></span>
						</div>
					</div>
				</div>
			</div><!--- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END TEAM -->

<!-- START TEAM -->
<section class="team_page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="our-team2">
					<div class="team-content2">
						<a href="#"><img src="{{asset('assets/images/team/1.jpg')}}" alt=""></a>
						<ul class="social-links">
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="team-prof">
						<h3>Bilkis Vabi</h3>
						<span>Web designer</span>
					</div>
					<div class="sth_det2">
						<span class="ti-file"> <u>04 Course</u></span>
						<span class="ti-user"> <u>27 Student</u></span>
					</div>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="our-team2">
					<div class="team-content2">
						<a href="#"><img src="{{asset('assets/images/team/2.jpg')}}" alt=""></a>
						<ul class="social-links">
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="team-prof">
						<h3>Mood Wasim</h3>
						<span>Envato company</span>
					</div>
					<div class="sth_det2">
						<span class="ti-file"> <u>06 Course</u></span>
						<span class="ti-user"> <u>41 Student</u></span>
					</div>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="our-team2">
					<div class="team-content2">
						<a href="#"><img src="{{asset('assets/images/team/3.jpg')}}" alt=""></a>
						<ul class="social-links">
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="team-prof">
						<h3>Shyinn tim</h3>
						<span>Codecanyou</span>
					</div>
					<div class="sth_det2">
						<span class="ti-file"> <u>13 Course</u></span>
						<span class="ti-user"> <u>31 Student</u></span>
					</div>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="our-team2">
					<div class="team-content2">
						<a href="#"><img src="{{asset('assets/images/team/4.jpg')}}" alt=""></a>
						<ul class="social-links">
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="team-prof">
						<h3>Shorif shorifa</h3>
						<span>Tsc chottor</span>
					</div>
					<div class="sth_det2">
						<span class="ti-file"> <u>07 Course</u></span>
						<span class="ti-user"> <u>24 Student</u></span>
					</div>
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END TEAM -->


@endsection
