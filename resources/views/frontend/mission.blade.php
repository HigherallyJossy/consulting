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
                            <h1>Mission & Values</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="company-overview.php">About Us</a></li>
                                <li>Mission & Values</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-content-->
    <div class="content-outer" id="page-content">
        <div class="container">
            <!--content-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="mission-outer">
                        <div class="mission-inner">
                            <h1>Our <span> Mission</span> </h1>
                            <h4>“Providing innovative and requires solutions with best of skills.”</h4>
                            <p>How to pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                again is there anyone who loves or pursues or desires to obtain pain of itself, because
                                it is pain, but because occasionally circumstances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="vision-outer">
                        <div class="vision-inner">
                            <h1>Our<span> Vision</span> </h1>
                            <h4>“Fulfilling clients’ requirements to have long term relationships.”</h4>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain some advantage from it? But who has any right to find fault with a man
                                who chooses to enjoy a pleasure that has no annoying consequences.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-section core-values">
                        <div class="heading">
                            <h1>Core <span>Values</span></h1>
                            <p>“We are a values-driven organization. Our values reflect the thinking of our founder,
                                William John.”</p>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                            <div class="core">
                                <h2><a>Client<br /> Satisfaction</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                            <div class="core">
                                <h2><a>Quality <br /> Deliverable</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                            <div class="core">
                                <h2><a>Learning <br /> and Upgrades</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                            <div class="core">
                                <h2><a>On Time <br /> Delivery</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                            <div class="core in">
                                <h2><a>Love & <br /> Understand</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0">
                        </div>
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
