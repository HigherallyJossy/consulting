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
                            <h1>Office Locations</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="company-overview.php">About Us</a></li>
                                <li>Office Locations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-content-->
    <div class="office-ocations" id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1>Corporate</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="heading col-lg-12">
                    <h2>Delaware <span>United States</span></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="image">
                        <img src="{{asset('frontend/image/office-locations/offiice-location-1.jpg')}}"
                            class="img-responsive" alt="office" width="370" height="353" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="content-outer-office">
                        <div class="content-inner">
                            <h2>Address</h2>
                            <p>Global Street 5004, Newyork, United States..</p>
                        </div>
                        <div class="content-inner">
                            <h2>Phone</h2>
                            <p> +0 (625) 07520-6644 & 55 </p>
                        </div>
                        <div class="content-inner">
                            <h2>Email</h2>
                            <p>Supportteam@Delawareusa.com</p>
                        </div>
                        <div class="content-inner">
                            <h2>Visit Our Office</h2>
                            <p>Monday - Satday: 9.00am to 5.00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section class="map-section">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <div class="google-map" id="contact-google-map" data-map-lat="44.231172"
                                data-map-lng="-76.485954"
                                data-icon-path="{{asset('frontend/img/icons/map-marker.png')}}"
                                data-map-title="Alabama, USA" data-map-zoom="12" data-markers='{
                     "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                     }'>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row space">
                <div class="heading col-lg-12">
                    <h2>Delaware <span>United Kingdom</span></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="image">
                        <img src="{{asset('frontend/image/office-locations/offiice-location-2.jpg')}}"
                            class="img-responsive" alt="office" width="370" height="353" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="content-outer-office">
                        <div class="content-inner">
                            <h2>Address</h2>
                            <p>Global Street 5004, Newyork, United States..</p>
                        </div>
                        <div class="content-inner">
                            <h2>Phone</h2>
                            <p> +0 (625) 07520-6644 & 55 </p>
                        </div>
                        <div class="content-inner">
                            <h2>Email</h2>
                            <p>Supportteam@Delawareusa.com</p>
                        </div>
                        <div class="content-inner">
                            <h2>Visit Our Office</h2>
                            <p>Monday - Satday: 9.00am to 5.00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section class="map-section">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <div class="google-map" id="contact-google-map-1" data-map-lat="44.231172"
                                data-map-lng="-76.485954"
                                data-icon-path="{{asset('frontend/img/icons/map-marker.png')}}"
                                data-map-title="Alabama, USA" data-map-zoom="12" data-markers='{
                     "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                     }'>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row space">
                <div class="heading col-lg-12">
                    <h2>Delaware <span>Australia</span></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="image">
                        <img src="{{asset('frontend/image/office-locations/offiice-location-3.jpg')}}"
                            class="img-responsive" alt="office" width="370" height="353" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="content-outer-office">
                        <div class="content-inner">
                            <h2>Address</h2>
                            <p>Global Street 5004, Newyork, United States..</p>
                        </div>
                        <div class="content-inner">
                            <h2>Phone</h2>
                            <p> +0 (625) 07520-6644 & 55 </p>
                        </div>
                        <div class="content-inner">
                            <h2>Email</h2>
                            <p>Supportteam@Delawareusa.com</p>
                        </div>
                        <div class="content-inner">
                            <h2>Visit Our Office</h2>
                            <p>Monday - Satday: 9.00am to 5.00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <section class="map-section">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <div class="google-map" id="contact-google-map-2" data-map-lat="44.231172"
                                data-map-lng="-76.485954"
                                data-icon-path="{{asset('frontend/img/icons/map-marker.png')}}"
                                data-map-title="Alabama, USA" data-map-zoom="12" data-markers='{
                     "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                     }'>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row space">
                <div class="heading col-lg-12">
                    <h2>Delaware <span>Newzeland</span></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="image">
                        <img src="{{asset('frontend/image/office-locations/offiice-location-4.jpg')}}"
                            class="img-responsive" alt="office" width="370" height="353" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="content-outer-office">
                        <div class="content-inner">
                            <h2>Address</h2>
                            <p>Global Street 5004, Newyork, United States..</p>
                        </div>
                        <div class="content-inner">
                            <h2>Phone</h2>
                            <p> +0 (625) 07520-6644 & 55 </p>
                        </div>
                        <div class="content-inner">
                            <h2>Email</h2>
                            <p>Supportteam@Delawareusa.com</p>
                        </div>
                        <div class="content-inner">
                            <h2>Visit Our Office</h2>
                            <p>Monday - Satday: 9.00am to 5.00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section class="map-section">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <div class="google-map" id="contact-google-map-3" data-map-lat="44.231172"
                                data-map-lng="-76.485954"
                                data-icon-path="{{asset('frontend/img/icons/map-marker.png')}}"
                                data-map-title="Alabama, USA" data-map-zoom="12" data-markers='{
                     "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                     }'>
                            </div>
                        </div>
                    </section>
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
