@extends('Layouts.app')
@section('Title')
    Log In
@endsection
@section('Content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Login Page</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> / Login Page</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!-- START LOGIN -->
    <section class="login_register section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-xs-12">
                    <form class="login" action="{{ route('Home.Login') }}" method="POST">
                        <h4 class="login_register_title">Already a member? Sign in:</h4>
                        <div class="form-group">
                            <x-input class="form-control requiredField input-label" label="User Name" name="username" />
                        </div>
                        <div class="form-group">
                            <x-input class="form-control requiredField input-label" type="password" label="Password"
                                name="password" />
                        </div>
                        <div class="form-group col-lg-12">
                            <button class="my_btn" type="submit">Login</button>
                        </div>
                        <p>Don't have an account? <a href="register.html">Register Now</a></p>
                    </form>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END LOGIN -->
@endsection
