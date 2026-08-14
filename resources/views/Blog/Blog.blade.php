@extends('Layouts.app')
@section('Title')
Blog
@endsection
@section('Content')
<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Blog</h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / Blog</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->
</div><!-- END  TOP HEADER CLASS -->

<!-- START BLOG -->
<section class="blog_area_bg section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_blog">
					<img src="{{asset('assets/images/blog/1.jpg')}}" class="img-fluid" alt="image" />
					<div class="img_info">
						<span>August 26, 2025 | <a href="blog_single.html">Education</a></span>
					</div>
					<div class="content_box">
						<h2><a href="blog_single.html">Professional Mobile Painting and Sculpting</a></h2>
						<a href="#" class="cta"><span>Read More</span>
							<svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div><!-- END COL-->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_blog">
					<img src="{{asset('assets/images/blog/2.jpg')}}" class="img-fluid" alt="image" />
					<div class="img_info">
						<span>August 28, 2025 | <a href="blog_single.html">Design</a></span>
					</div>
					<div class="content_box">
						<h2><a href="blog_single.html">Professional Ceramic Moulding for Beginner</a></h2>
						<a href="#" class="cta"><span>Read More</span>
							<svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div><!-- END COL-->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_blog">
					<img src="{{asset('assets/images/blog/3.jpg')}}" class="img-fluid" alt="image" />
					<div class="img_info">
						<span>August 30, 2025 | <a href="blog_single.html">Marketing</a></span>
					</div>
					<div class="content_box">
						<h2><a href="blog_single.html">Education Is About Create Leaders For Tomorrow </a></h2>
						<a href="#" class="cta"><span>Read More</span>
							<svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div><!-- END COL-->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_blog">
					<img src="{{asset('assets/images/blog/1.jpg')}}" class="img-fluid" alt="image" />
					<div class="img_info">
						<span>August 26, 2025 | <a href="blog_single.html">Education</a></span>
					</div>
					<div class="content_box">
						<h2><a href="blog_single.html">Professional Mobile Painting and Sculpting</a></h2>
						<a href="#" class="cta"><span>Read More</span>
							<svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div><!-- END COL-->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_blog">
					<img src="{{asset('assets/images/blog/2.jpg')}}" class="img-fluid" alt="image" />
					<div class="img_info">
						<span>August 28, 2025 | <a href="blog_single.html">Design</a></span>
					</div>
					<div class="content_box">
						<h2><a href="blog_single.html">Professional Ceramic Moulding for Beginner</a></h2>
						<a href="#" class="cta"><span>Read More</span>
							<svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div><!-- END COL-->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_blog">
					<img src="{{asset('assets/images/blog/3.jpg')}}" class="img-fluid" alt="image" />
					<div class="img_info">
						<span>August 30, 2025 | <a href="blog_single.html">Marketing</a></span>
					</div>
					<div class="content_box">
						<h2><a href="blog_single.html">Education Is About Create Leaders For Tomorrow </a></h2>
						<a href="#" class="cta"><span>Read More</span>
							<svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div><!-- END COL-->
		</div><!-- / END ROW -->
	</div><!-- END CONTAINER  -->
</section>
<!-- END BLOG -->

<!-- START NEWSLETTER -->
<section class="newsletter_area section-padding">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
				<div class="subs_form">
					<h3>Subscripbe to our newsletter, We don't make any spam.</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim</p>
					<form action="#" class="home_subs">
						<input type="text" class="subscribe__input" placeholder="Enter your Email Address">
						<button type="button" class="subscribe__btn">Subscribe</button>
					</form>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END NEWSLETTER -->
@endsection