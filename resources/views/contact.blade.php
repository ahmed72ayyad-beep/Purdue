@extends('Layouts.app')
@section('Title')
Contact
@endsection
@section('Content')
<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Get In Touch</h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / Contact</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->
</div><!-- END  TOP HEADER CLASS -->

<!-- START ADDRESS -->
<section class="address_area  section-padding">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_address">
					<i class="ti-map"></i>
					<h4>Our Location</h4>
					<p>3481 Melrose Place, Beverly Hills <br /> CA 90210</p>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_address">
					<i class="ti-mobile"></i>
					<h4>Telephone</h4>
					<p>(+1) 517 397 7100</p>
					<p>(+1) 411 315 8138</p>
				</div>
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_address">
					<i class="ti-email"></i>
					<h4>Send email</h4>
					<p>Info@example.com</p>
					<p>admin@example.com</p>
				</div>
			</div><!-- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END ADDRESS -->

<!-- CONTACT -->
<div id="contact" class="contact_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="section-title-two">
					<h2>Send your message.</h2>
				</div>
				<div class="contact">
					<form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" name="name" class="form-control" required="required" placeholder="Your Name">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="email" class="form-control" required="required" placeholder="Your Email">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="subject" class="form-control" required="required" placeholder="Your Subject">
							</div>
							<div class="form-group col-md-12">
								<textarea rows="6" name="message" class="form-control" required="required" placeholder="Your Message"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<a href="#" class="cta"><span>Send Message</span>
									<svg width="13px" height="10px" viewBox="0 0 13 10">
										<path d="M1,5 L11,5"></path>
										<polyline points="8 1 12 5 8 9"></polyline>
									</svg>
								</a>
							</div>
						</div>
					</form>
				</div>
			</div><!-- END COL  -->
			<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="map">
					<img style="width: 500px; border-radius: 20px;     box-shadow: 0px 1px 8px 0.5px #c5e6f5; overflow: hidden;" src="{{asset('assets/images/all-img/sarah-dorweiler-x2Tmfd1-SgA-unsplash.jpg')}}">
				</div>
			</div><!-- END COL  -->
		</div><!-- END ROW -->
	</div><!--- END CONTAINER -->
</div>
<!-- END CONTACT -->
@endsection