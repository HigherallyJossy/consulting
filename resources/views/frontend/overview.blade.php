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
<main id="main">
    <div class="page-header text-dark parallax has-image">
        <div class="page-header-content">
            <div class="featured-image"
                style="background:url({{asset('frontend/image/company-overview/banner.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="heading">
                            <h1>Company Overview</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="company-overview.php">About Us</a></li>
                                <li>Company Overview</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="{{asset('frontend/image/company-overview/about-us-wel.jpg')}}" class="img-responsive"
                            alt="about-us" width="770" height="430" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="content-outer-about">
                        <div class="content-inner in">
                            <h2><a>Who We are</a></h2>
                            <p>Come to DelWare to do the best work, with the best teams.</p>
                        </div>
                        <div class="content-inner in">
                            <h2><a>Mission & Values</a></h2>
                            <p>Experienced professional or a recent graduate, working with DelWare.</p>
                        </div>
                        <div class="content-inner">
                            <h2><a>Our History</a></h2>
                            <p>Could be a challenging and rewarding next step in your career.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-about-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-about-about-two">
                        <div class="content-inner">
                            <div class="heading">
                                <h1>The world's largest global provider dedicated to <span>Consulting</span> and
                                    <span>Finance</span> solutions.</h1>
                            </div>
                            <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will
                                give you a complete account of the system, and expound the actual teachings of the great
                                explorer of the truth, the master-builder of human happiness one rejects, dislikes, or
                                avoids pleasure itself, because it is pleasure,</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-about-about-two">
                        <div class="content-inner">
                            <p>We are a global management consulting firm that serves a private, public and
                                social business sectors . We help our clients make significant and and realize
                                their most important goals who loves or pursues or desires to obtain pain of
                                because pain, but because occasionally desires to occur.
                            </p>
                            <p>Our clients make significant and & realize their most important goals who
                                loves or pursues our desires to obtain pains of because is pain, but because
                                occasionally desires to obtain.
                            </p>
                            <div class="main">
                                <h2>Nathan Missoray, <span>CEO & Founder</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="work-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading text-center">
                        <h1>Our Work <span>Process</span></h1>
                    </div>
                    <p class="para text-center">Delware Consulting understands that to help meet client challenges and
                        opportunities successfully in a global economy
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="process-inner in">
                        <div class="image">
                            <img src="{{asset('frontend/image/company-overview/svg/mountain.svg')}}" class="logo"
                                style="width:50px;" alt="logo" />
                        </div>
                        <div class="process-content">
                            <h2>Share Your Goal</h2>
                            <p>How all this mistaken our idea complete system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="process-inner in">
                        <div class="image">
                            <img src="{{asset('frontend/image/company-overview/svg/gear.svg')}}" class="logo"
                                style="width:50px;" alt="logo" />
                        </div>
                        <div class="process-content">
                            <h2>Find a Challenges</h2>
                            <p>Denouncing pleasure praising expound actual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="process-inner">
                        <div class="image">
                            <img src="{{asset('frontend/image/company-overview/svg/solution.svg')}}" class="logo"
                                style="width:50px;" alt="logo" />
                        </div>
                        <div class="process-content">
                            <h2>Get a Solution</h2>
                            <p> There anyone all loves desires obtain pain itself.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="video-holder"
                        style="background-image:url({{asset('frontend/image/company-overview/video-bg.jpg')}});">
                        <div class="overlay-gallery">
                            <div class="icon-holder">
                                <div class="icon">
                                    <a class="html5lightbox bg" title="Solution Video Gallery"
                                        href="https://www.youtube.com/watch?v=b9B1nOyzNvI"><img
                                            src="{{asset('frontend/image/company-overview/svg/play-button.svg')}}"
                                            alt="Play Button" class="btn" style="width:50px;"></a>
                                </div>
                            </div>
                        </div>
                        <span class="contact"><a href="#"><img
                                    src="{{asset('frontend/image/company-overview/svg/phone-call.svg')}}" class="logo"
                                    alt="logo" style="width:18px;" /> 1 (857) 899-0009</a></span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="in col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="progress-content">
                            <div class="progress-outer">
                                <h5>85%</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active"
                                        style="width:85%; ;"></div>
                                    <div class="progress-value"></div>
                                </div>
                                <div class="content-inner">
                                    <h2>Quality Assurance</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                </div>
                            </div>
                            <div class="progress-outer">
                                <h5>74%</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active"
                                        style="width:74%; ;"></div>
                                    <div class="progress-value"></div>
                                </div>
                                <div class="content-inner">
                                    <h2>Planning & Stratergye</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="in col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="progress-content">
                            <div class="progress-outer">
                                <h5>96%</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active"
                                        style="width:96%;;"></div>
                                    <div class="progress-value"></div>
                                </div>
                                <div class="content-inner">
                                    <h2>Process Consulting</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                </div>
                            </div>
                            <div class="progress-outer">
                                <h5>53%</h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active"
                                        style="width:53%; "></div>
                                    <div class="progress-value"></div>
                                </div>
                                <div class="content-inner">
                                    <h2>Information Security</h2>
                                    <p>This mistaken idea of denouncing pleasure and praising.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="responibility">
        <div class="container">
            <div class="row heading-group">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1>Corporate <span>Responsibility</span></h1>
                    </div>
                    <p class="para">Delware Consulting understands that to help meet client challenges and opportunities
                        successfully in a global economy</p>
                </div>
            </div>
            <div class="row ">
                <div class="tab-content-inner">
                    <ul class="nav nav-pills content-inner">
                        <li class="column education active">
                            <a data-toggle="pill" href="#home">
                                <div class="image">
                                    <img src="{{asset('frontend/image/company-overview/svg/rating.svg')}}" class="logo"
                                        alt="logo"
                                        style="width:40px; margin-left:auto; margin-right:auto; display:block;" />
                                </div>
                                <h2>Education</h2>
                            </a>
                        </li>
                        <li class="column environment">
                            <a data-toggle="pill" href="#menu1">
                                <div class="image">
                                    <img src="{{asset('frontend/image/company-overview/svg/recycle.svg')}}" class="logo"
                                        alt="logo"
                                        style="width:40px; margin-left:auto; margin-right:auto; display:block;" />
                                </div>
                                <h2>Environment</h2>
                            </a>
                        </li>
                        <li class="column community">
                            <a data-toggle="pill" href="#menu2">
                                <div class="image">
                                    <img src="{{asset('frontend/image/company-overview/svg/solution.svg')}}"
                                        class="logo" alt="logo"
                                        style="width:40px; margin-left:auto; margin-right:auto; display:block;" />
                                </div>
                                <h2>Community</h2>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <p class="paragraph">Explain to you how all this mistaken idea of denouncing pleasure and
                                praising pain was born and I will give you a
                                complete account of the system, and expound the actual teachings of the great explorer
                                of the truth,
                                the master-builder of human happiness.
                            </p>
                            <!-- <p><a href="#">KNOW MORE</a></p> -->
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <p class="paragraph">Explain to you how all this mistaken idea of denouncing pleasure and
                                praising pain was born and I will give you a
                                complete account of the system, and expound the actual teachings of the great explorer
                                of the truth,
                                the master-builder of human happiness.
                            </p>
                            <!-- <p><a href="#">KNOW MORE</a></p> -->
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <p class="paragraph">Explain to you how all this mistaken idea of denouncing pleasure and
                                praising pain was born and I will give you a
                                complete account of the system, and expound the actual teachings of the great explorer
                                of the truth,
                                the master-builder of human happiness.
                            </p>
                            <!-- <p><a href="#">KNOW MORE</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="employees">
                        <p><span class="counter-count">90</span> <i class="fas fa-plus"></i></p>
                        <p class="employee-p">Countries Served</p>
                    </div>
                </div>
                <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="customer">
                        <p><span class="counter-count">12</span> <a class="txt">K</a><i class="fas fa-plus in"></i></p>
                        <p class="employee-p">Consultants Worldwide</p>
                    </div>
                </div>
                <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="design">
                        <p><span class="counter-count">72</span> <i class="fas fa-plus"></i></p>
                        <p class="employee-p">Industries Covered</p>
                    </div>
                </div>
                <div class="count-lg col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="order">
                        <p><span class="counter-count">20</span><i class="fas fa-plus"></i></p>
                        <p class="employee-p">Technologies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="opportunity">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 package-one">
                    <div class="inner-section">
                        <h2>For Business Process</h2>
                        <p>Call Us at<span> 1 (857) 899-0009 </span>or click below to get a quote</p>
                        <h6><a href="contact.php" class="btn-1">Contact Us</a></h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 package-two">
                    <div class="inner-section">
                        <h2>Looking for a Job?</h2>
                        <p> We seeking a <span>motivated and passionate</span> person to join us</p>
                        <h6><a href="our-career.php" class="btn-2">Open Positions</a></h6>
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
