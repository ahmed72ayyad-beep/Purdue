@extends('Layouts.app2')
@section('Title')
Instractor[ID={{$id}}] - Details
@endsection
@section('Content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Single team</h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / Single team</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->
</div><!-- END  TOP HEADER CLASS -->

<!-- START AGENT PROFILE -->
<section class="template_agent section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="single_agent">
					<div class="single_agent_image">
						<img src="{{asset('assets/images/team/1.jpg')}}" class="img-fluid" alt="" />
					</div>
					<div class="single_agent_content">
						<h4>Kauya Kader. Batpar khan</h4>
						<h5>Digital Marketer</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever type book.</p>
						<ul>
							<li><i class="fa fa-envelope-o"></i>yourmail@gmail.com</li>
							<li><i class="fa fa-phone"></i>(+123) 123 123 123</li>
							<li><i class="fa fa-plane"></i>www.yourdomainname.com</li>
							<li><i class="fa-brands fa-skype"></i>skype.address</li>
						</ul>
					</div>
					<div class="agent_social">
						<ul class="list-inline">
							<li><a href="#" class="top_f_facebook"><img src="{{asset('assets/images/icon/fb.svg')}}" alt="" /></a></li>
							<li><a href="#" class="top_f_facebook"><img src="{{asset('assets/images/icon/tw.svg')}}" alt="" /></a></li>
							<li><a href="#" class="top_f_facebook"><img src="{{asset('assets/images/icon/pn.svg')}}" alt="" /></a></li>
							<li><a href="#" class="top_f_facebook"><img src="{{asset('assets/images/icon/ins.svg')}}" alt="" /></a></li>
						</ul>
					</div>
				</div><!--- END SINGLE ITEM -->
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END AGENT PROFILE -->

@endsection
