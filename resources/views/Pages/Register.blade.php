@extends('Layouts.app')
@section('Title')
    Register
@endsection
@section('Content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Register Page</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> / Register</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->


    <!-- START LOGIN AND REGISTER -->
    <section class="login_register section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-xs-12">
                    <h4 class="login_register_title">Create a new account:</h4>
                    <form action="{{ route('Home.Register') }}" class="register" method="POST">
                        {{-- Username,Full Name,Email Address,Password --}}
                        <x-input class="form-control requiredField input-label" name="username" label="User Name" />
                        <x-input class="form-control requiredField input-label" name="fullname" label="Full Name" />
                        <x-input class="form-control requiredField input-label" name="emailaddress" label="Email Address"
                            type="email" />
                        <x-input class="form-control requiredField input-label" name="password" type="password"
                            label="Password" />

                        <button class="btn_one" type="submit" name="submit">Signup Now</button>
                        <div class="form-group col-lg-12">
                        </div>
                        <p>Already have an account? <a href="{{ route('Home.Login') }}">Login</a></p>
                    </form>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END LOGIN AND REGISTER -->
@endsection
