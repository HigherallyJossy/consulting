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
                            <h1>Our History</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="company-overview.php">About Us</a></li>
                                <li>Our History</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-content-->
    <div class="our-history" id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-outer">
                        <div class="image-inner">
                            <div class="heading">
                                <h1>Some Unique <span>Story</span> Behind Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row history">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li class="perodic">
                            <div class="timeline-badge perodic-table ">
                                <h2>1978</h2>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge warning"><a></a></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span>March 26</span>
                                    <h4 class="timeline-title">Establishment of Company</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>To take a trivial example, which of us ever laborious physical exercise, except
                                        to obtain some advantage from it? But who has any right to find fault with a man
                                        who chooses to enjoy.</p>
                                </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge info"><a></a></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span>April 14</span>
                                    <h4 class="timeline-title">First Recognition</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Who loves or pursues or desires to obtain pain itself, it is pain, but because
                                        occasionally circumstances occur in which toil and pain can procure him some
                                        great pleasure.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge warning"><a></a></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span>August 22</span>
                                    <h4 class="timeline-title">Best Consulting Award</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>To take a trivial example, which of us ever laborious physical exercise, except
                                        to obtain some advantage from it? But who has any right to find fault with a man
                                        who chooses to enjoy.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted in">
                            <div class="timeline-badge info"><a></a></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span>November 16</span>
                                    <h4 class="timeline-title">Hudge Corporate Project</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Who loves or pursues or desires to obtain pain itself, it is pain, but because
                                        occasionally circumstances occur in which toil and pain can procure him some
                                        great pleasure.</p>
                                </div>
                            </div>
                        </li>
                        <li class="perodic ">
                            <div class="timeline-badge  preodic-left ">
                                <h2>1980</h2>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge warning"><a></a></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span>February 26</span>
                                    <h4 class="timeline-title">Opened 27 Offices Worldwide</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>To take a trivial example, which of us ever laborious physical exercise, except
                                        to obtain some advantage from it? But who has any right to find fault with a man
                                        who chooses to enjoy.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted in">
                            <div class="timeline-badge info "><a></a></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span>June 27</span>
                                    <h4 class="timeline-title">Best Consultant of the Year</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Who loves or pursues or desires to obtain pain itself, it is pain, but because
                                        occasionally circumstances occur in which toil and pain can procure him some
                                        great pleasure.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
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
<script src="{{asset('frontend/js/html5lightbox.js.download')}}"></script>
<script type="text/javascript" src="{{asset('frontend/owl/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/nav-scripts.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"> </script>
<script type="text/javascript" src="{{asset('frontend/js/validator.min.js')}}"></script>
<script src="{{asset('frontend/js/preload.js')}}"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<script src="{{asset('frontend/js/gmaps.js')}}"></script>
<script src="{{asset('frontend/js/map-script.js')}}"></script>
@endsection
