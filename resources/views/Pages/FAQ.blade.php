@extends('Layouts.app')
@section('Title')
FAQ
@endsection
@section('Content')
<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Faq</h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / Faq</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->
</div><!-- END  TOP HEADER CLASS -->

<!-- START FAQ -->
<section class="faq_area section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What does it take excellent author?
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Who will view my content?
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								What does it take become an author?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How to Change my Password easily?
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								How does it create content?
							</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
				</div>
			</div><!-- END COL  -->
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="pt_faq">
					<img src="{{asset('assets/images/all-img/faq.png')}}" class="img-fluid" alt="image" />
				</div>
			</div><!-- END COL  -->
		</div><!--END  ROW  -->
	</div><!--- END CONTAINER -->
</section>
<!-- END FAQ -->


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