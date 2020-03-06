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
                            <h1>Client Testimonials</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="company-overview.php">About Us</a></li>
                                <li>Client Testimonials</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-content-->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-in-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="client-text">
                        <div class="col-cont col-lg-9 col-md-9 col-xs-9">
                            <h3> Elizabeth</h3>
                            <p class="sub">Sydney, Australia</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-3">
                            <div class="quotes">
                                <span class="flaticon-quote"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                            <p class="bor">Come to DelWare to do the best work, with the best teams and truly be at
                                yourbest. Problem solvers and creative
                                thinkers. Engineers and new business builders mistaken idea of denouncing pleasure and
                                praising pain was born & they will give you a complete account.
                            </p>
                            <h6><a href="#">Read More <i class="fas fa-arrow-right"></i></a></h6>
                        </div>
                        <div class="overlay-sub">
                        </div>
                    </div>
                </div>
                <div class="col-in-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="client-text">
                        <div class="col-cont col-lg-9 col-md-9 col-xs-9">
                            <h3> Elizabeth</h3>
                            <p class="sub">Sydney, Australia</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-3">
                            <div class="quotes">
                                <span class="flaticon-quote"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                            <p class="bor">Experienced professional or a recent graduate, working with DelWare could be
                                a challenging and rewarding next step in your career. Opportunities are limitless and
                                every day makes a difference mistaken idea of denouncing pleasure and praising will give
                                you a completed.</p>
                            <h6><a href="#">Read More <i class="fas fa-arrow-right"></i></a></h6>
                        </div>
                        <div class="overlay-sub">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second">
                <div class="col-in-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="client-text">
                        <div class="col-cont col-lg-9 col-md-9 col-xs-9">
                            <h3> Elizabeth</h3>
                            <p class="sub">Sydney, Australia</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-3">
                            <div class="quotes">
                                <span class="flaticon-quote"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                            <p class="bor">Experienced professional or a recent graduate, working with DelWare could be
                                a challenging and rewarding next step in your career. Opportunities are limitless and
                                every day makes a difference mistaken idea of denouncing pleasure and praising will give
                                you a completed.</p>
                            <h6><a href="#">Read More <i class="fas fa-arrow-right"></i></a></h6>
                        </div>
                        <div class="overlay-sub">
                        </div>
                    </div>
                </div>
                <div class="col-in-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="client-text">
                        <div class="col-cont col-lg-9 col-md-9 col-xs-9">
                            <h3> Elizabeth</h3>
                            <p class="sub">Sydney, Australia</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-3">
                            <div class="quotes">
                                <span class="flaticon-quote"></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                            <p class="bor">Come to DelWare to do the best work, with the best teams and truly be at
                                yourbest. Problem solvers and creative
                                thinkers. Engineers and new business builders mistaken idea of denouncing pleasure and
                                praising pain was born & they will give you a complete account.
                            </p>
                            <h6><a href="#">Read More <i class="fas fa-arrow-right"></i></a></h6>
                        </div>
                        <div class="overlay-sub">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-last">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 package-one">
                    <div class="inner-section">
                        <h2>For Business Process</h2>
                        <p>Call Us at<span> 1 (857) 899-0009 </span>or click below to get a quote</p>
                        <h6><a href="#" class="btn-1">Contact Us</a></h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 package-two">
                    <div class="inner-section">
                        <h2>Looking for a Job?</h2>
                        <p> We seeking a <span>motivated and passionate</span> person to join us</p>
                        <h6><a href="#" class="btn-2">Open Positions</a></h6>
                    </div>
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
