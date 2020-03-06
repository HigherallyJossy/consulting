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
                            <h1>Recent Events</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li>Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-default">
        <div class="container">
            <div class="row">
                @if(count($events) > 0)
                @foreach($events as $event)
                <div class="column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-default-outer">
                        <div class="image">
                            <a href="{{url('/events/read?title='.$event->slug)}}">
                                <img src="{{Voyager::image($event->thumbnail('cropped'))}}" class="img-responsive"
                                    alt="image" width="369" height="180" />
                                <div class="overlay">
                                    <div class="text"> <span class="flaticon-chain"></span></div>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="hero">General, World</div> --}}
                        <div class="blog-content">
                            <h5> {{ date('F d, Y', strtotime($event->date))}}</h5>
                            <div class="txt-inner">
                                <h2>{{$event->title}}</h2>
                                <p>{{$event->title}}</p>
                                <a href="{{url('/events/read?title='.$event->slug)}}">Read more <span
                                        class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-xs-12 text-center">
                    <h3>No events to show</h3>
                    <a href="{{url('/')}}">Back To Home</a>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $events->links() }}
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
