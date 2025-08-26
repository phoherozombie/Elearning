@extends('frontend.layouts.app')
@section('title', 'About')
@section('header-attr') class="nav-shadow" @endsection

@section('content')
<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html" class="fs-6 text-secondary">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="about.html" class="fs-6 text-secondary">About</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Ends Here -->

<!-- About Intro Starts Here -->
<section class="about-intro section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative mt-4 mt-lg-0" style="z-index: 0;">
                <div class="about-intro__img-wrapper">
                    <img src="{{asset('frontend/dist/images/about/intro.jpg')}}" alt="Intro Image"
                        class="img-fluid rounded-2 ms-lg-5 position-relative intro-image" />
                </div>
                <div class="intro-shape">
                    <img src="{{asset('frontend/dist/images/shape/rec04.png')}}" alt="Shape"
                        class="img-fluid shape-01" />
                    <img src="{{asset('frontend/dist/images/shape/dots/dots-img-09.png')}}" alt="Shape"
                        class="img-fluid shape-02" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-intro__textContent">
                    <h2 class="font-title--md mb-3">A Great Place to Grow.</h2>
                    <p class="mt-2 mt-lg-1 mb-2 mb-lg-4 text-secondary">
                        Our company provides an environment where creativity, learning,
                        and innovation thrive. We believe that growth comes from
                        continuous improvement and a strong commitment to excellence.
                    </p>
                    <p class="text-secondary">
                        Whether you are a client, a partner, or part of our team,
                        we aim to create opportunities that inspire progress and
                        build lasting success together.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Intro Ends Here -->

<!-- About Feature Starts Here -->
<section class="section aboutFeature pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-feature dark-feature">
                    <h5 class="text-white font-title--sm">Who We Are</h5>
                    <p class="text-lowblack">
                        We are a passionate team dedicated to creating meaningful digital solutions.
                        With expertise in technology, design, and strategy, we help businesses grow
                        and connect with their audiences in impactful ways. Our culture values
                        innovation, collaboration, and long-term partnerships with our clients that inspire lasting change.

                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="about-feature">
                    <h5 class="font-title--sm">Our Mission</h5>
                    <p class="text-secondary">
                        Our mission is to empower organizations through innovative solutions and
                        human-centered design. We strive to deliver high-quality services that
                        combine creativity and technology, enabling businesses to achieve sustainable
                        growth. Every project we take on is guided by a commitment to excellence,
                        trust, and measurable impact.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Feature Ends Here -->

<!-- Brands Starts Here -->
<section class="section overflow-hidden brands pb-lg-0">
    <div class="bg-secondary py-80">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="brands__titleContent">
                        <h5 class="mb-2 dark-text font-title--sm">
                            Over 30,000+ Schools & Colleges Learning With Us.
                        </h5>
                        <p class="font-para--lg">
                            Trusted by more than 30,000 schools and colleges worldwide, Eduguard provides
                            innovative tools and resources that make learning more engaging and effective.
                            We are proud to support educators and students in building a brighter future.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-area">
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/1.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/2.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/3.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/4.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/2.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/5.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brands Ends Here -->

<!-- Best Instructors Starts Here -->
<section class="section best-instructor-featured overflow-hidden main-instructor-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative">
                <h2 class="text-center mb-40 font-title--md">Meet Our Best Instructor</h2>
                <div class="ourinstructor__wrapper mt-lg-5 mt-0">
                    <div class="ourinstructor-active">
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/03.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Abram Philips</a>
                                </h6>
                                <p>Adobe Instructor</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/02.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Abram Philips</a>
                                </h6>
                                <p>Adobe Instructor</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/3.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Sheikh Rashed</a>
                                </h6>
                                <p>Adobe Instructor</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/04.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Abram Philips</a>
                                </h6>
                                <p>Adobe Instructor</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/1.png')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6><a href="instructor-profile.html" tabindex="0">Dev Taher</a></h6>
                                <p>Adobe Instructor</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/2.png')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Zakir Hossain</a>
                                </h6>
                                <p>Adobe Instructor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-instructor-featured-shape">
        <img src="{{asset('frontend/dist/images/shape/dots/dots-img-14.png')}}" alt="shape"
            class="img-fluid shape01" />
        <img src="{{asset('frontend/dist/images/shape/triangel2.png')}}" alt="shape" class="img-fluid shape02" />
    </div>
</section>
@endsection

@push('scripts')
@endpush