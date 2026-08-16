@extends('Layouts.app2')
@section('Title')
    Top Courses
@endsection
@section('Content')
    <!-- START SECTION TOP -->
    <section class="section-top">


        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Course One</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li> / All Course</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->
    </div><!-- END  TOP HEADER CLASS -->

    <!--START COURSE -->
    <div class="best-course section-padding">
        <div class="container">
            <div class="section-title">
                <h4>Popular Courses</h4>
                <h1>Choose Our Top Courses</h1>
            </div>
            <div class="course-list row wow fadeIn">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/course/1.jpg') }}" alt="course">
                                <div class="course-price">$150</div>
                            </div>

                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Data Science</a>
                                </div>

                                <h3><a href="#">Professional Ceramic Moulding for Beginners</a></h3>

                                <div class="crating">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                    <span>
                                        5.0 / 28 Rating
                                    </span>
                                </div>

                                <div class="cmeta">
                                    <span>
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M14.376 6.25H3.126a.625.625 0 00-.626.625v8.75c0 .345.28.625.625.625h11.25c.346 0 .626-.28.626-.625v-8.75a.625.625 0 00-.625-.625z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M5 3.75h11.875a.625.625 0 01.625.625v9.375" />
                                        </svg>
                                        25 Lessons
                                    </span>

                                    <span class="cmtime">
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M10 5.625V10h4.375" />
                                            <path stroke="#2c7aff" stroke-miterlimit="10" stroke-width="1.5"
                                                d="M10 16.875a6.875 6.875 0 100-13.75 6.875 6.875 0 000 13.75z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M15.303 2.045l2.652 2.652M2.045 4.697l2.652-2.652" />
                                        </svg>
                                        8 Hours
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="course-hover align-self-center">
                            <div class="chover_content">
                                <div class="ccategory">
                                    <a href="#">Data Science</a>
                                </div>

                                <h3><a href="#">Professional Ceramic Moulding for Beginners</a></h3>

                                <div class="hcourse-price">$150.00</div>
                                <p>
                                    Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.
                                </p>
                                <div class="hcmeta">
                                    <span>
                                        <img src="{{ asset('assets/images/all-img/avator.png') }}" alt="img">
                                        <a href="#">Theme Ocean</a>
                                    </span>

                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                        5.0 (2k)
                                    </span>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="cta"><span>Enroll Now</span>
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End course-item -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/course/2.jpg') }}" alt="course">
                                <div class="course-price">$120</div>
                            </div>

                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Management</a>
                                </div>

                                <h3><a href="#">Ultimate Photoshop Training: From Beginner</a></h3>

                                <div class="crating">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                    <span>
                                        5.0 / 28 Rating
                                    </span>
                                </div>

                                <div class="cmeta">
                                    <span>
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M14.376 6.25H3.126a.625.625 0 00-.626.625v8.75c0 .345.28.625.625.625h11.25c.346 0 .626-.28.626-.625v-8.75a.625.625 0 00-.625-.625z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M5 3.75h11.875a.625.625 0 01.625.625v9.375" />
                                        </svg>
                                        25 Lessons
                                    </span>

                                    <span class="cmtime">
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M10 5.625V10h4.375" />
                                            <path stroke="#2c7aff" stroke-miterlimit="10" stroke-width="1.5"
                                                d="M10 16.875a6.875 6.875 0 100-13.75 6.875 6.875 0 000 13.75z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M15.303 2.045l2.652 2.652M2.045 4.697l2.652-2.652" />
                                        </svg>
                                        8 Hours
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="course-hover align-self-center">
                            <div class="chover_content">
                                <div class="ccategory">
                                    <a href="#">Management</a>
                                </div>

                                <h3><a href="#">Ultimate Photoshop Training: From Beginner</a></h3>

                                <div class="hcourse-price">$120.00</div>
                                <p>
                                    Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.
                                </p>
                                <div class="hcmeta">
                                    <span>
                                        <img src="{{ asset('assets/images/all-img/avator.png') }}" alt="img">
                                        <a href="#">Theme Ocean</a>
                                    </span>

                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                        5.0 (2k)
                                    </span>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="cta"><span>Enroll Now</span>
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End course-item -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/course/3.jpg') }}" alt="course">
                                <div class="course-price">$170</div>
                            </div>

                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Graphics</a>
                                </div>

                                <h3><a href="#">Basic Fundamentals of Interior & Graphics Design</a></h3>

                                <div class="crating">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                    <span>
                                        5.0 / 28 Rating
                                    </span>
                                </div>

                                <div class="cmeta">
                                    <span>
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M14.376 6.25H3.126a.625.625 0 00-.626.625v8.75c0 .345.28.625.625.625h11.25c.346 0 .626-.28.626-.625v-8.75a.625.625 0 00-.625-.625z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M5 3.75h11.875a.625.625 0 01.625.625v9.375" />
                                        </svg>
                                        25 Lessons
                                    </span>

                                    <span class="cmtime">
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M10 5.625V10h4.375" />
                                            <path stroke="#2c7aff" stroke-miterlimit="10" stroke-width="1.5"
                                                d="M10 16.875a6.875 6.875 0 100-13.75 6.875 6.875 0 000 13.75z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M15.303 2.045l2.652 2.652M2.045 4.697l2.652-2.652" />
                                        </svg>
                                        8 Hours
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="course-hover align-self-center">
                            <div class="chover_content">
                                <div class="ccategory">
                                    <a href="#">Graphics</a>
                                </div>

                                <h3><a href="#">Basic Fundamentals of Interior & Graphics Design</a></h3>

                                <div class="hcourse-price">$170.00</div>
                                <p>
                                    Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.
                                </p>
                                <div class="hcmeta">
                                    <span>
                                        <img src="{{ asset('assets/images/all-img/avator.png') }}" alt="img">
                                        <a href="#">Theme Ocean</a>
                                    </span>

                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                        5.0 (2k)
                                    </span>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="cta"><span>Enroll Now</span>
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End course-item -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="course-item d-flex">
                        <div class="course-inner">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/course/4.jpg') }}" alt="course">
                                <div class="course-price">$140</div>
                            </div>

                            <div class="course-content">
                                <div class="ccategory">
                                    <a href="#">Development</a>
                                </div>

                                <h3><a href="{{ url('Home/Courses1/1') }}">WordPress for Beginners – Master WordPress</a>
                                </h3>

                                <div class="crating">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                    <span>
                                        5.0 / 28 Rating
                                    </span>
                                </div>

                                <div class="cmeta">
                                    <span>
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M14.376 6.25H3.126a.625.625 0 00-.626.625v8.75c0 .345.28.625.625.625h11.25c.346 0 .626-.28.626-.625v-8.75a.625.625 0 00-.625-.625z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M5 3.75h11.875a.625.625 0 01.625.625v9.375" />
                                        </svg>
                                        25 Lessons
                                    </span>

                                    <span class="cmtime">
                                        <svg fill="none" viewBox="0 0 20 20">
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M10 5.625V10h4.375" />
                                            <path stroke="#2c7aff" stroke-miterlimit="10" stroke-width="1.5"
                                                d="M10 16.875a6.875 6.875 0 100-13.75 6.875 6.875 0 000 13.75z" />
                                            <path stroke="#2c7aff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5" d="M15.303 2.045l2.652 2.652M2.045 4.697l2.652-2.652" />
                                        </svg>
                                        8 Hours
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="course-hover align-self-center">
                            <div class="chover_content">
                                <div class="ccategory">
                                    <a href="#">Development</a>
                                </div>

                                <h3><a href="{{ route('Home.Courses1', 1) }}">WordPress for Beginners – Master
                                        WordPress</a>
                                </h3>

                                <div class="hcourse-price">$140.00</div>
                                <p>
                                    Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.
                                </p>
                                <div class="hcmeta">
                                    <span>
                                        <img src="assets/img/avator.png" alt="img">
                                        <a href="#">Theme Ocean</a>
                                    </span>

                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                        5.0 (2k)
                                    </span>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="cta"><span>Enroll Now</span>
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End course-item -->
            </div><!--END ROW -->
        </div>
    </div><!--END CONTAINER -->
    </div>
    <!--END COURSE -->

    <!-- END NEWSLETTER -->
@endsection
