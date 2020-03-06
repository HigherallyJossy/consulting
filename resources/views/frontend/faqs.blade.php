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
                            <h1>FAQ’s</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li>FAQ’s</li>
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
            <div class="row">

                <div class="faqs col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne">
                                        How Global State IT Solutions Work?
                                        <i class="indicator ionicons ion-android-arrow-up pull-right"></i> </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Over 20 years of experience we’ll ensure you always get the best guidance. We serve
                                    a clients at every sed level of their organization we can be most useful, who has
                                    any right to find fault with a man who chooses to with a man who chooses to enjoy a
                                    pleasure annoying consequences.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo">
                                        What are the main features of Global State IT Solutions?
                                        <i class="indicator ionicons ion-android-arrow-down pull-right"></i> </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Over 20 years of experience we’ll ensure you always get the best guidance. We serve
                                    a clients at every sed level of their organization we can be most useful, who has
                                    any right to find fault with a man who chooses to with a man who chooses to enjoy a
                                    pleasure annoying consequences.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree">
                                        Talk to our experts?
                                        <i class="indicator ionicons ion-android-arrow-down pull-right"></i> </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Over 20 years of experience we’ll ensure you always get the best guidance. We serve
                                    a clients at every sed level of their organization we can be most useful, who has
                                    any right to find fault with a man who chooses to with a man who chooses to enjoy a
                                    pleasure annoying consequences.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsefour">
                                        What sectors do you specialize in?
                                        <i class="indicator ionicons ion-android-arrow-down pull-right"></i> </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Over 20 years of experience we’ll ensure you always get the best guidance. We serve
                                    a clients at every sed level of their organization we can be most useful, who has
                                    any right to find fault with a man who chooses to with a man who chooses to enjoy a
                                    pleasure annoying consequences.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsefive">
                                        What is your refund policy?
                                        <i class="indicator ionicons ion-android-arrow-down pull-right"></i> </a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Over 20 years of experience we’ll ensure you always get the best guidance. We serve
                                    a clients at every sed level of their organization we can be most useful, who has
                                    any right to find fault with a man who chooses to with a man who chooses to enjoy a
                                    pleasure annoying consequences.
                                </div>
                            </div>
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
