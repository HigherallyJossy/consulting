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

<style>
    .details-inner.active {
        border: 1px solid #111C55 !important;
    }

</style>
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
                            <h1>Our Career</h1>
                        </div>
                        <div class="bread-cumb-inner">
                            <ul class="breadcrumb">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li>Our Career</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-content-->
    <div class="our-career" id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1><span>Let's grow</span> together</h1>
                        <p>We specialize in hiring people who have the drive to succeed and the will to implement the
                            discipline required to succeed. Join our award-winning team, and enjoy a creative, dynamic
                            and inclusive culture focused on one goal – improving the world around us through
                            imagination and innovation.</p>
                    </div>
                </div>
            </div>
            <div class="row content-inner">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="career-inner-first">
                        <a href="#" class="link"></a>
                        <div class="content-heading">
                            <h2>Innovation</h2>
                        </div>
                        <div class="icon-box">
                            <span class="icon flaticon-idea"></span>
                        </div>
                        <div class="content-description">
                            <p>Explain to you how all this one mistaken idea of denouncing pleasure...</p>
                            <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="career-inner-first">
                        <a href="#" class="link"></a>
                        <div class="content-heading">
                            <h2>Right Direction</h2>
                        </div>
                        <div class="icon-box in">
                            <span class="icon flaticon-road-sign"></span>
                        </div>
                        <div class="content-description">
                            <p>Righteous indignation & dislike men who are so beguiled demoralized...</p>
                            <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="career-inner-first">
                        <a href="#" class="link"></a>
                        <div class="content-heading">
                            <h2>Culture & Growth</h2>
                        </div>
                        <div class="icon-box">
                            <span class="icon flaticon-growth"></span>
                        </div>
                        <div class="content-description">
                            <p>Indignation & dislike men who of pleasure of the moment, so blinded...</p>
                            <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger  alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('success-message'))
                    <div class="alert alert-success  alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('success-message') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1 class="in">Open Positions</h1>
                    </div>
                </div>
                <div class="open-position">
                    @if($openings)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row in">
                            <!--row-1-->
                            @foreach($openings as $opening)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="details-inner {{ $opening->slug == Request::get('job') ? 'active' : '' }}">
                                    <div class="content-inner">
                                        <p>{{ date('F d, Y', strtotime($opening->publish_date))}}</p>
                                        <h2>{{ $opening->title }}</h2>
                                        <h6>{{ $opening->location }}</h6>
                                    </div>
                                    <div class="description-more">
                                        <span><a href="{{url('/career').'?job='.$opening->slug}}">View Job Details <i
                                                    class="fas fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ $openings->links() }}
                            </div>
                        </div>
                        <!--row-3-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="job-description">
                            <div class="job-heading">
                                <h2>Job Descriptions:</h2>
                                <p>{{$active_opening->job_description}}</p>
                            </div>
                            <div class="job-table">
                                <ul>
                                    <li class="main fist"><span>Job Id</span>:{{"GS-".$active_opening->id}}</li>
                                    <li><span>Dept:</span> {{$active_opening->department}}</li>
                                    <li class="main fist"><span>Experience:</span> {{$active_opening->experience}}</li>
                                    <li><span>Package:</span> {{$active_opening->package}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="responsibilities">
                            <div class="heading-response">
                                <h2>Responsibilities:</h2>
                                {!! $active_opening->job_responsibilities !!}
                            </div>
                            <!-- Button trigger modal -->

                            <div class="btn">
                                <a href="0#" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="modal fade" id="exampleModal" tabindex="1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="margin-top:10%">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Apply for
                                            {{$active_opening->title}}
                                        </h4>

                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('/career/submit')}}" id="resumeForm"
                                            enctype="multipart/form-data" method="post">
                                            @csrf
                                            <input type="hidden" name="job_title" value="{{$active_opening->title}}">
                                            <div class="form-group">
                                                <label for="email">Full Name</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    value="{{old('name')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    value="{{old('email')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Contact Number</label>
                                                <input type="number" name="contact_number" class="form-control"
                                                    id="number" value="{{old('contact_number')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Message</label>
                                                <textarea class="form-control" name="message" id="message"
                                                    rows="8">{{old('message')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Upload Resume</label>
                                                <input type="file" name="resume" class="form-control" id="number">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            onclick="$('#resumeForm').submit()">Submit</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
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
{{-- <script src="{{asset('frontend/js/bootstrap.js')}}"> </script> --}}
<script src="{{asset('frontend/js/bootstrap.min.js')}}"> </script>
<!-- thm video script -->
<script src="{{asset('frontend/js/html5lightbox.js')}}"></script>
<script src="{{asset('frontend/js/nav-scripts.min.js')}}"></script>
<script src="{{asset('frontend/owl/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"> </script>
<script src="{{asset('frontend/js/preload.js')}}"></script>
@endsection
