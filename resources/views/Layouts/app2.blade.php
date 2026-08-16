<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Purdue - Education HTML Template">
    <meta name="keywords"
        content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
    <meta name="author" content="theme_ocean">
    <link rel="shortcut icon" href="{{ asset('images/all-img/logo.png') }}" type="image/x-icon">
    <!-- SITE TITLE -->
    <title>@yield('Title', 'Defult')</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('webfonts/themify-icons.css') }}">
    <!-- All Min Css -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.css') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!--jquery-simple-mobilemenu Css-->
    <link rel="stylesheet" href="{{ asset('css/jquery-simple-mobilemenu.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    @yield('CSS')
</head>

<body>

    <!-- START PRELOADER -->
    <div class="preloaders">
        <span class="loader">Loading</span>
    </div>
    <!-- END PRELOADER -->

    <!-- START TOP HEADER CLASS -->
    <div class="top_header_banner">
        <!-- START LOGO WITH CONTACT -->
        <section class="logo-contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 co
                    l-md-4 col-sm-6 col-xs-12">
                        <div class="single-top-contact">
                            <i class="ti-mobile"></i>
                            <h4><a href="tel:+4857548854826">+ 485 7548 8546</a></h4>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-top-contact">
                            <i class="ti-email"></i>
                            <h4><a href="mailto:example@gmail.com">example@mail.com</a></h4>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-top-contact">
                            <i class="ti-alarm-clock"></i>
                            <h4>Mon to sat Open: 9am - 6pm</h4>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="top_social_profile">
                            <ul>
                                <li><a href="#" class="top_f_facebook"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a href="#" class="top_f_twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li><a href="#" class="top_f_instagram"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a href="#" class="top_f_linkedin"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- END LOGO WITH CONTACT -->

        <!-- START NAVBAR -->
        <div id="navigation" class="navbar-light bg-faded site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-20 align-self-center">
                        <div class="site-logo">
                            <a href="{{ route('Home') }}"><img src="{{ asset('images/all-img/logo.png') }}"
                                    alt=""></a>
                        </div>
                    </div><!--- END Col -->

                    <div class="col-60 d-flex">
                        <nav id="main-menu">
                            <ul>
                                <li><a href="{{ route('Home') }}">Home</a></li>
                                <li><a href="{{ route('Home.About') }}">About</a></li>
                                <li class="menu-item-has-children"><a href="{{ route('Home.Courses1') }}">Course</a>
                                    <ul>
                                        <li><a href="{{ route('Home.Courses1') }}">Top Courses</a></li>
                                        <li><a href="{{ route('Home.Courses2') }}">New Courses</a></li>
                                        <li><a href="{{ route('Home.Courses3') }}">For You</a></li>
                                        <!-- <li><a href="single_course.html">Course Details</a></li> -->
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('Home.Instractors') }}">Instructor</a></li>
                                        <!-- <li><a href="{{ route('Home.Instractors') }}">Instructor Details</a></li> -->
                                        <li><a href="{{ route('Home.Events') }}">Event</a></li>
                                        <!-- <li><a href="event_single.html">Single Event</a></li> -->
                                        <li><a href="{{ route('Home.Pricing') }}">Pricing Plan</a></li>
                                        <li><a href="{{ route('Home.FAQ') }}">Faq Page</a></li>
                                        <li><a href="{{ route('Home.Login') }}">Login Page</a></li>
                                        <li><a href="{{ route('Home.Register') }}">Register</a></li>
                                        <!-- <li><a href="error.html">404</a></li> -->
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="{{ route('Home.Shop') }}">Shop</a>
                                    <ul>
                                        <li><a href="{{ route('Home.Shop') }}">Shop</a></li>
                                        <!-- <li><a href="single_shop.html">Single Shop</a></li> -->
                                        <li><a href="{{ route('Home.Shop.Cart') }}">Cart</a></li>
                                        <li><a href="{{ route('Home.Shop.Checkout') }}">Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('Home.Blog') }}">Blog</a>


                                </li>
                                <li><a href="{{ route('Home.Contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div><!--- END Col -->

                    <div class="col-30 d-none d-xl-block text-end align-self-center">
                        <div class="home_lc">
                            <a href="#" class="hlc">
                                <i class="fa-regular fa-heart"></i>
                                <span class="gactive">0</span>
                            </a>
                            <a href="#" class="hlc">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="gactive">2</span>
                            </a>
                        </div>
                        <div class="call_to_action">
                            <a class="btn_two" href="{{ route('Home.Register') }}">Enroll Now <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div><!--- END SOCIAL PROFILE -->
                    </div><!--- END Col -->

                    <ul class="mobile_menu">

                        <a href="{{ route('Home') }}">Home</a>
                        {{-- <li><a href="index2.html">Home Two</a></li> --}}

                        <li><a href="{{ route('Home.About') }}">About</a></li>
                        <li><a href="#">Course</a>
                            <ul class="sub-menu">
                                <li><a href="{route('Home.Courses1')}}">Course One</a></li>
                                <li><a href="{{ route('Home.Courses3') }}">Course Two</a></li>
                                <li><a href="{{ route('Home.Courses3') }}">Course Three</a></li>
                                <!-- <li><a href="single_course.html">Course Details</a></li> -->
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('Home.Instractors') }}">Instructor</a></li>
                                <!-- <li><a href="team-details.html">Instructor Details</a></li> -->
                                <li><a href="{{ route('Home.Events') }}">Event</a></li>
                                <!-- <li><a href="event_single.html">Single Event</a></li> -->
                                <li><a href="{{ route('Home.Pricing') }}">Pricing Plan</a></li>
                                <li><a href="{{ route('Home.FAQ') }}">Faq Page</a></li>
                                <li><a href="{{ route('Home.Login') }}">Login Page</a></li>
                                <li><a href="{{ route('Home.Register') }}">Register</a></li>
                                <!-- <li><a href="error.html">404</a></li> -->
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('Home.Shop') }}">Shop</a></li>
                                <!-- <li><a href="single_shop.html">Single Shop</a></li> -->
                                <li><a href="{{ route('Home.Shop.Cart') }}">Cart</a></li>
                                <li><a href="{{ route('Home.Shop.Checkout') }}">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('Home.Blog') }}">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('Home.Blog') }}">Blog</a></li>
                                <!-- <li><a href="blog_single.html">Blog Details</a></li> -->
                            </ul>
                        </li>
                        <li><a href="{{ route('Home.Contact') }}">Contact</a></li>
                    </ul>
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div>
        <!-- END NAVBAR-->
        @yield('Content')

        <!-- START NEWSLETTER -->
        <section class="newsletter_area section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
                        <div class="subs_form">
                            <h3>Subscripbe to our newsletter, We don't make any spam.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim</p>


                            <form action="{{ route('Home.subscribe') }}" method="POST" class="home_subs">
                                <x-input type="email" class="subscribe__input"
                                    placeholder="Enter your Email Address" name="email" />
                                {{-- <input type="text" class="subscribe__input" placeholder="Enter your Email Address"> --}}
                                <button style="margin: 0%; top: 27%;" type="submit"
                                    class="subscribe__btn">Subscribe</button>
                            </form>





                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- START FOOTER -->
        <div class="footer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="single_footer">
                            <a href="index.html"><img src="{{ asset('assets/images/all-img/logo.png') }}"
                                    alt=""></a>
                            <p>immediately shared the results with a friend who couldn’t believe it was written by an
                                AI. is worth every Yaley and then some. Describe my business along with my business
                                name.</p>
                        </div>
                        <div class="foot_social">
                            <ul>
                                <li><a href="#" class="top_f_facebook"><i
                                            class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#" class="top_f_twitter"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" class="top_f_instagram"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="top_f_linkedin"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
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
                                <p>example@yourmail.com</p>
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
                            <a href="index.html"><img src="{{ asset('assets/images/all-img/google-play.jpg') }}"
                                    class="foot_img" alt=""></a>
                            <a href="index.html"><img src="{{ asset('assets/images/all-img/app-store.jpg') }}"
                                    class="foot_img" alt=""></a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
                <div class="row fc">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="footer_copyright">
                            <p>&copy; 2025. All Rights Reserved by <a href="https://bestwpware.com/" class="text-dark"
                                    target="_blank">bestwpware</a> • Distributed by <a href="https://themewagon.com"
                                    class="text-dark" target="_blank">ThemeWagon</a> </p>
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
        <script src="{{ asset('js/jquery-1.12.4.min') }}.js"></script>
        <!-- Latest compiled and minified Bootstrap -->
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- owl-carousel min js  -->
        <script src="{{ asset('owlcarousel/js/owl.carousel.min.js') }}"></script>
        <!-- jquery-simple-mobilemenu.min -->
        <script src="{{ asset('js/jquery-simple-mobilemenu.js') }}"></script>
        <!-- magnific-popup js -->
        <script src="a{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- jquery mixitup min js -->
        <script src="{{ asset('js/jquery.mixitup.js') }}"></script>
        <!-- GSAP AND LOCOMOTIV JS-->
        <script src="{{ asset('js/gsap.min.js') }}"></script>
        <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('js/lenis.js') }}"></script>
        <!-- scrolltopcontrol js -->
        <script src="{{ asset('js/scrolltopcontrol.js') }}"></script>
        <!-- jquery inview js -->
        <script src="a{{ asset('js/jquery.inview.min.js') }}"></script>
        <!-- WOW - Reveal Animations When You Scroll -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- scripts js -->
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('JS')
</body>

</html>
