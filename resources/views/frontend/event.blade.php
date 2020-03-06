@extends('frontend.layouts.master')
@section('title',$event->page_title)
@section('keywords',$event->keywords)
@section('description',$event->description)
@section('author',$event->author)

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
    <div class="page-header text-dark parallax has-image">
        <div class="page-header-content">
            <div class="featured-image"
                style="background:url({{asset('frontend/image/company-overview/banner.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="heading">
                            <h1>Event</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/events')}}">Events</a></li>
                                <li class="active">{{$event->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-singlepost">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-post-outer">
                        <div class="single-post-inner-one">
                            <div class="single-post-inner-one">
                                <ul class="link-item">
                                    <li class="active"><a>{{ date('F d, Y', strtotime($event->date))}} </a></li>
                                    <li><a>Business Plans </a></li>
                                    <li><a>3 Comments</a></li>
                                </ul>
                                <div class="inner-one-heading">
                                    <h2>{{$event->title}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content-inner">
                        <div class="image">
                            <img src="{{Voyager::image($event->image)}}" class="img-responsive" alt="image" width="770"
                                height="400" />
                        </div>
                        <div class="content-blog-inner">
                            {!! $event->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@include("frontend.includes.page-footer")
@endsection
@section('scripts')
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
