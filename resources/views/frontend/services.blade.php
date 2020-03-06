@extends('frontend.layouts.master')
@section('title',"")
@section('keywords',"")
@section('description',"")
@section('author',"")

@section('style')
<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
<link href="{{asset('frontend/css/inner-page-style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/flaticon.css')}}" />
<!-- Libraries CSS Files -->
<link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
<!--navbar css-->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/navbar.css')}}" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!--Favicon-->
<link rel="shortcut icon" href="{{asset('frontend/image/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/image/favicon.png')}}" type="image/x-icon">
@endsection

@section('content')
@include("frontend.includes.page-header")
<main>
    <div class="page-header  text-dark parallax has-image">
        <div class="page-header-content">
            <div class="featured-image"
                style="background:url({{asset('frontend/image/company-overview/banner.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="heading">
                            <h1>Services</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a>Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-1">
                        <div class="image-1">
                            <img src="{{asset('frontend/image/service/1.png')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <div class="text-1">
                                    <span class="flaticon-powerpoint service"></span>
                                    <p>Software Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-powerpoint service-in"></span>
                            <div class="text-in-inner">
                                <h2>Software Development</h2>
                                <p>Committed to clients success, our professionals risks and opportunities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-1">
                        <div class="image-1">
                            <img src="{{asset('frontend/image/service/2.png')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <div class="text-1">
                                    <span class="flaticon-coach service "></span>
                                    <p>Strategic Planning</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-coach service-in"></span>
                            <div class="text-in-inner">
                                <h2>Strategic Planning</h2>
                                <p>We also have deep expertise in antitrust issues, mergers and acquisitions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="service-1">
                        <div class="image-1">
                            <img src="{{asset('frontend/image/service/3.png')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <div class="text-1">
                                    <span class="flaticon-speaker  service"></span>
                                    <p>Global Consulting</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-speaker service-in"></span>
                            <div class="text-in-inner">
                                <h2>Global Consulting</h2>
                                <p>Our team supports clients high stakes arbitration and compliance investigations.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service-1">
                        <div class="image-1">
                            <img src="{{asset('frontend/image/service/4.png')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <div class="text-1">
                                    <span class="flaticon-support service"></span>
                                    <p>IT Security</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-support service-in"></span>
                            <div class="text-in-inner">
                                <h2>IT Security</h2>
                                <p>Our broad network with key influencers, we reaches the audience at the right time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service-1">
                        <div class="image-1">
                            <img src="{{asset('frontend/image/service/5.png')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <div class="text-1">
                                    <span class="flaticon-stock service"></span>
                                    <p>Workforce Management</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-stock service-in"></span>
                            <div class="text-in-inner">
                                <h2>Workforce Management</h2>
                                <p>We also analyze financial data to assist companies with risk avoidance..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service-1">
                        <div class="image-1">
                            <img src="{{asset('frontend/image/service/6.png')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <div class="text-1">
                                    <span class="flaticon-user service"></span>
                                    <p>Migration Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-user service-in"></span>
                            <div class="text-in-inner">
                                <h2>Migration Services</h2>
                                <p>We can also assist with the recovery of assets lost to fraud and identify..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="last-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-content">
                        <h1>Request a <span>call Back</span></h1>
                        <p>Thank you for your interest in DelWare. Please fill out the form below to ask a question. We
                            will get back to you with 1-2 business days.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a class="btn1" href="{{url('/contact')}}"
                        style="transition: none 0s ease 0s; line-height: 30px; border-width: 2px solid #2685f9; margin: 0px; padding: 10px 33px; border-radius: 30px 30px; letter-spacing: 0px; font-weight: 600; font-size: 18px; background: #2685f9; color: white; float: right;">Contact
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</main>
@include("frontend.includes.page-footer")
@endsection
@section('scripts')
<!--primary-mobile-nav end-->
<script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"> </script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"> </script>
<!-- thm video script -->
<script src="{{asset('frontend/js/html5lightbox.js')}}"></script>
<script src="{{asset('frontend/js/nav-scripts.min.js')}}"></script>
<script src="{{asset('frontend/owl/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"> </script>
<script src="{{asset('frontend/js/preload.js')}}"></script>
@endsection
