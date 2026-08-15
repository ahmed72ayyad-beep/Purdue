@extends('Layouts.app')
@section('Title', 'Not Found 404')
@section('Content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Not Found</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> / Error</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!-- START 404 -->
    <section class="zero_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="error_page">
                        <img src="{{ asset('assets/images/a') }}
ll-img/404.svg" class="img-fluid" alt="404 error" />
                        <h2>Oops! Page not found</h2>
                        <p>Hmm. We’re having trouble finding that site. Try again later or Check your network connection.
                        </p>
                        <div class="home_btn">
                            <a href="{{ route('Home') }}" class="btn_one">Back to Home</a>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END 404 -->

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
