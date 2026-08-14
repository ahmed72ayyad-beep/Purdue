@extends('Layouts.app')
@section('Title')
Shop - Cart
@endsection
@section('Content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Cart</h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li> / Cart</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->
</div><!-- END  TOP HEADER CLASS -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Shopping Summery -->
				<table class="table shopping-summery">
					<thead>
						<tr class="main-hading">
							<th>PRODUCT</th>
							<th>NAME</th>
							<th class="text-center">UNIT PRICE</th>
							<th class="text-center">QUANTITY</th>
							<th class="text-center">TOTAL</th>
							<th class="text-center"><i class="ti-trash remove-icon"></i></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="image" data-title="No"><img src="{{asset('assets/images/shop/cart1.jpg')}}" alt="#"></td>
							<td class="product-des" data-title="Description">
								<p class="product-name"><a href="#">Top Selling Book</a></p>
								<p class="product-des">Maboriosam in a tonto nesciung eget distingy magndapibus.</p>
							</td>
							<td class="price" data-title="Price"><span>$110.00 </span></td>
							<td class="qty" data-title="Qty"><!-- Input Order -->
								<div class="input-group">
									<div class="button minus">
										<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="100" value="1">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
								<!--/ End Input Order -->
							</td>
							<td class="total-amount" data-title="Total"><span>$220.88</span></td>
							<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
						</tr>
						<tr>
							<td class="image" data-title="No"><img src="{{asset('assets/images/shop/cart2.jpg')}}" alt="#"></td>
							<td class="product-des" data-title="Description">
								<p class="product-name"><a href="#">Best Seller</a></p>
								<p class="product-des">Maboriosam in a tonto nesciung eget distingy magndapibus.</p>
							</td>
							<td class="price" data-title="Price"><span>$110.00 </span></td>
							<td class="qty" data-title="Qty"><!-- Input Order -->
								<div class="input-group">
									<div class="button minus">
										<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[2]" class="input-number" data-min="1" data-max="100" value="2">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[2]">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
								<!--/ End Input Order -->
							</td>
							<td class="total-amount" data-title="Total"><span>$220.88</span></td>
							<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
						</tr>
						<tr>
							<td class="image" data-title="No"><img src="{{asset('assets/images/shop/cart3.jpg')}}" alt="#"></td>
							<td class="product-des" data-title="Description">
								<p class="product-name"><a href="#">Most Wanted</a></p>
								<p class="product-des">Maboriosam in a tonto nesciung eget distingy magndapibus.</p>
							</td>
							<td class="price" data-title="Price"><span>$110.00 </span></td>
							<td class="qty" data-title="Qty"><!-- Input Order -->
								<div class="input-group">
									<div class="button minus">
										<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[3]" class="input-number" data-min="1" data-max="100" value="3">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[3]">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
								<!--/ End Input Order -->
							</td>
							<td class="total-amount" data-title="Total"><span>$220.88</span></td>
							<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
						</tr>
					</tbody>
				</table>
				<!--/ End Shopping Summery -->
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Total Amount -->
				<div class="total-amount">
					<div class="row">
						<div class="col-lg-8 col-md-5 col-12">
							<div class="left">
								<div class="coupon">
									<form action="#">
										<input name="Coupon" placeholder="Enter Your Coupon">
										<button class="btn">Apply</button>
									</form>
								</div>
								<div class="checkbox">
									<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-7 col-12">
							<div class="right">
								<ul>
									<li>Cart Subtotal<span>$330.00</span></li>
									<li>Shipping<span>Free</span></li>
									<li>You Save<span>$20.00</span></li>
									<li class="last">You Pay<span>$310.00</span></li>
								</ul>
								<div class="button5">
									<a href="#" class="btn">Checkout</a>
									<a href="#" class="btn">Continue shopping</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Total Amount -->
			</div>
		</div>
	</div>
</div>
<!--/ End Shopping Cart -->

<!-- Start Shop Services Area  -->
<section class="shop-services section" style="margin-bottom:60px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->

<!-- START FOOTER -->
<div class="footer section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single_footer">
					<a href="index.html"><img src="{{asset('assets/images/all-img/logo.png')}}" alt=""></a>
					<p>immediately shared the results with a friend who couldn’t believe it was written by an AI. is worth every Yaley and then some. Describe my business along with my business name.</p>
				</div>
				<div class="foot_social">
					<ul>
						<li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
						<li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="#" class="top_f_linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-2 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Courses</h4>
					<ul>
						<li><a href="#">Creative Writing</a></li>
						<li><a href="#">Digital Marketing</a></li>
						<li><a href="#">SEO Business</a></li>
						<li><a href="#">Social Marketing</a></li>
						<li><a href="#">Graphic Design</a></li>
						<li><a href="#">Website Development</a></li>
					</ul>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-2 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Company</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Knowledge Base</a></li>
						<li><a href="#">Affiliate Program</a></li>
						<li><a href="#">Community</a></li>
						<li><a href="#">Market API</a></li>
						<li><a href="#">Support team</a></li>
					</ul>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Contact Info</h4>
					<div class="sf_contact">
						<span class="ti-mobile"></span>
						<h3>Phone number</h3>
						<p>+88 457 845 695</p>
					</div>
					<div class="sf_contact">
						<span class="ti-email"></span>
						<h3>Email Address</h3>
						<p>example#yourmail.com</p>
					</div>
					<div class="sf_contact">
						<span class="ti-map"></span>
						<h3>Office Address</h3>
						<p>California, USA</p>
					</div>
				</div>
			</div><!--- END COL -->
			<div class="col-lg-2 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Download App</h4>
					<p>Download our app from app store and goole play store.</p>
					<a href="index.html"><img src="{{asset('assets/images/all-img/google-play.jpg')}}" class="foot_img" alt=""></a>
					<a href="index.html"><img src="{{asset('assets/images/all-img/app-store.jpg')}}" class="foot_img" alt=""></a>
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
		<div class="row fc">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="footer_copyright">
					<p>&copy; 2025. All Rights Reserved by <a href="https://bestwpware.com/" class="text-dark" target="_blank">bestwpware</a> • Distributed by <a href="https://themewagon.com" class="text-dark" target="_blank">ThemeWagon</a> </p>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="footer_menu">
					<ul>
						<li><a href="#">Terms of use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Cookie Policy</a></li>
					</ul>
				</div>
			</div><!-- END COL -->
		</div>
	</div><!--- END CONTAINER -->
</div>
<!-- END FOOTER -->

<!-- Latest jQuery -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- jquery-simple-mobilemenu.min -->
<script src="assets/js/jquery-simple-mobilemenu.js"></script>
<!-- magnific-popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- jquery mixitup min js -->
<script src="assets/js/jquery.mixitup.js"></script>
<script src="assets/js/nicesellect.js"></script>
<!-- GSAP AND LOCOMOTIV JS-->
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/lenis.js"></script>
<!-- scrolltopcontrol js -->
<script src="assets/js/scrolltopcontrol.js"></script>
<!-- jquery inview js -->
<script src="assets/js/jquery.inview.min.js"></script>
<!-- WOW - Reveal Animations When You Scroll -->
<script src="assets/js/wow.min.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">
	$('select').niceSelect();
</script>
</body>

</html>