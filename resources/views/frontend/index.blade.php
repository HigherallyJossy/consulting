@extends('frontend.layouts.master')
@section('title',"")
@section('keywords',"")
@section('description',"")
@section('author',"")

@section('style')
<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
<!-- font-icon CSS Files -->
<link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">
<!-- Main Stylesheet File -->
<link type="text/css" rel="stylesheet" href="{{asset('frontend/homepage1/css/styles.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('frontend/homepage1/css/navbar.css')}}" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!--Favicon-->
<link rel="shortcut icon" href="{{asset('frontend/image/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/image/favicon.png')}}" type="image/x-icon">
<!-- Slider Revolution CSS Files -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/revolution/css/navigation.css')}}">

<!--owl-->
<link type="text/css" rel="stylesheet" href="{{asset('frontend/homepage1/owl/assets/owl.carousel.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('frontend/homepage1/owl/assets/owl.theme.default.min.css')}}" />
@endsection

@section('content')
@include("frontend.includes.header")

<main id="main">
    <div class="rev_slider_wrapper">
        <!-- the ID here will be used in the inline JavaScript below to initialize the slider -->
        <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">
            <ul>
                <li data-index='rs-386' data-transition='turnoff' data-slotamount='default' data-easein='default'
                    data-easeout='default' data-masterspeed='1500' data-thumb='' data-rotate='0'
                    data-saveperformance='off' data-title='Turn Off Horizontal' data-description=''>
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('frontend/image/main-slider/home-1/banner-1.jpg')}}" alt="" width="1920"
                        height="850" data-lazyload=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="14" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption titel-3   tp-resizeme" id="slide-386-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="[700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['180','180','180','180']"
                        data-fontsize="['24','24','24','16']" data-lineheight="['60','60','60','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 5; white-space: nowrap; text-transform:uppercase; letter-spacing:4px;  color:#fff;">
                        We’re more than just
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption titel-1   tp-resizeme" id="slide-386-layer-2"
                        data-x="['left','left','left','left']" data-hoffset="[700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['230','230','230','210']"
                        data-fontsize="['90','90','90','55']" data-lineheight="['110','110','110','50']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 6; white-space: nowrap; color:#111c55;">BUSINESS
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption titel-1   tp-resizeme" id="slide-386-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="[700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['320','320','320','260']"
                        data-fontsize="['90','90','90','55']" data-lineheight="['110','110','110','50']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 7; white-space: nowrap;color:#111c55;">
                        ADBISORS
                        <div class="border"></div>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption titel-2 tp-resizeme" id="slide-386-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="[700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['440','440','440','320']"
                        data-fontsize="['20','20','20','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap; color:#fff;">We’re branching out beyond traditional
                        practice
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption titel-2   tp-resizeme" id="slide-386-layer-5"
                        data-x="['left','left','left','left']" data-hoffset="[700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['470','470','470','345']"
                        data-fontsize="['20','20','20','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap; color:#fff; ">areassuch as strategy, organization, and
                        operations
                    </div>
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption titel-2   tp-resizeme" id="slide-386-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="[700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['500','500','500','370']"
                        data-fontsize="['20','20','20','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap; color:#fff;">to develop next-generation areas of
                        expertise
                    </div>
                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption fp_button_layer   tp-resizeme" id="slide-3-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['700','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['540','540','540','405']"
                        data-fontsize="['14','14','14','12']" data-lineheight="['70','70','70','70']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="button" data-actions=""
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:900,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                        data-textalign="['left','left','left','left']"
                        style="z-index: 9; white-space: nowrap; color: rgb(255, 255, 255); background-color:transparent; border-color: transparent; border-width: 2px; outline: none; box-shadow: none; box-sizing: border-box; cursor: pointer; text-decoration: none; visibility: inherit; transition: none 0s ease 0s;  line-height: 12px; margin: 0px;  letter-spacing: 0px; font-weight: 700; font-size: 16px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 44, 0, 1); transform-origin: 50% 50% 0px;">
                        <ul class="list-inline">
                            <li><a class="btn1" href="{{ url('/services') }}">Services</a></li>
                            <li><a class="btn2" href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </li>
                <li data-index='rs-387' data-transition='turnoff-vertical' data-slotamount='default'
                    data-easein='default' data-easeout='default' data-masterspeed='1500' data-thumb='' data-rotate=''
                    data-saveperformance='off' data-title='Turn Off Vertical' data-description=''>
                    <img src="{{asset('frontend/image/main-slider/home-1/banner-2.jpg')}}" alt="" width="1920"
                        height="850" data-lazyload=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="15" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption titel-1  tp-resizeme" id="slide-387-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="[0','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['140','140','140','140']"
                        data-fontsize="['48','48','48','24']" data-lineheight="['70','70','70','40']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 5; white-space: nowrap; color:#fff; ">INDUSTRIES
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption titel-1 in tp-resizeme" id="slide-387-layer-2"
                        data-x="['left','left','left','left']" data-hoffset="[0','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['190','190','190','155']"
                        data-fontsize="['90','90','90','55']" data-lineheight="['110','110','110','110']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 6; white-space: nowrap; color:#fff; ">
                        WE COVER
                        <div class="border"></div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption titel-2-new   tp-resizeme" id="slide-387-layer-3"
                        data-x="['left','left','left','left']" data-hoffset="[0','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['320','320','320','260']"
                        data-fontsize="['18','18','18','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 7; white-space: nowrap; color:#f8e510;"><i class="fas fa-check"></i>Banking and
                        Financial Services.
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption titel-2-new   tp-resizeme" id="slide-387-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="[2','12','12','12']"
                        data-y="['top','top','top','top']" data-voffset="['360','360','360','300']"
                        data-fontsize="['18','18','18','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap;color:#f8e510; "><i class="fas fa-check"></i>Capital
                        Projects and Infrastructure.
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption titel-2-new   tp-resizeme" id="slide-387-layer-5"
                        data-x="['left','left','left','left']" data-hoffset="[2','12','12','12']"
                        data-y="['top','top','top','top']" data-voffset="['400','400','400','340']"
                        data-fontsize="['18','18','18','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap;color:#f8e510;  "><i
                            class="fas fa-check"></i>Manufacturing.
                    </div>
                    <!-- LAYER NR.6 -->
                    <div class="tp-caption titel-2-new   tp-resizeme" id="slide-387-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="[2','12','12','12']"
                        data-y="['top','top','top','top']" data-voffset="['440','440','440','380']"
                        data-fontsize="['18','18','18','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap;color:#f8e510; "><i class="fas fa-check"></i>Travel,
                        Transport and Logistics.
                    </div>
                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption titel-2-new tp-resizeme" id="slide-387-layer-7"
                        data-x="['left','left','left','left']" data-hoffset="[2','12','12','12']"
                        data-y="['top','top','top','top']" data-voffset="['480','480','480','420']"
                        data-fontsize="['18','18','18','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap;color:#f8e510;  "><i class="fas fa-check"></i>Healthcare
                        and Life Sciences.
                    </div>
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption titel-2-new   tp-resizeme" id="slide-387-layer-8"
                        data-x="['left','left','left','left']" data-hoffset="[2','12','12','12']"
                        data-y="['top','top','top','top']" data-voffset="['520','520','520','460']"
                        data-fontsize="['18','18','18','15']" data-lineheight="['30','30','30','30']"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 8; white-space: nowrap;color:#f8e510; ;"><i class="fas fa-check"></i>Energy,
                        Power and Products.
                    </div>
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption fp_button_layer   tp-resizeme" id="slide-2-layer-9"
                        data-x="['left','left','left','left']" data-hoffset="[0','10','10','10']"
                        data-y="['top','top','top','top']" data-voffset="['570','570','570','510']"
                        data-fontsize="['14','14','14','12']" data-lineheight="['70','70','70','70']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="button" data-actions=""
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:900,&quot;speed&quot;:500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[100%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                        data-textalign="['left','left','left','left']"
                        style="z-index: 9; white-space: nowrap; color: rgb(255, 255, 255); background-color:transparent; border-color: transparent; border-width: 2px; outline: none; box-shadow: none; box-sizing: border-box; cursor: pointer; text-decoration: none; visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 12px; margin: 0px;  letter-spacing: 0px; font-weight: 700; font-size: 16px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 44, 0, 1); transform-origin: 50% 50% 0px;">
                        <ul class="list-inline">
                            <li><a class="btn1" href="{{ url('/services') }}">Services</a></li>
                            <li><a class="btn2" href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </li>                
            </ul>
        </div>
    </div>
    <!--slider-end-->
    <div class="welcome-section-delware ">
        <div class="container clearfix">
            <div class="row welcome-content">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="heading ">
                        <h2><span>INDUSTRIES WE</span> COVER</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="para-graph">
                        <p>We are a global management consulting firm that serves a private, public and social business
                            sectors . We help our clients make significant and and realize their most important goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section-delware ">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-1 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/product-section-3.jpg')}}" class="img-responsive"
                                alt="product-img">
                            <a href="#" class="link"></a>
                            <div class="overlay">
                                <div class="text">
                                    <span class="flaticon-global icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <h2><a href="#">Banking & Financial Services</a></h2>
                            <p>Opportunities while benefiting those with out access to financial services</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/product-section-2.jpg')}}" class="img-responsive"
                                alt="product-img">
                            <a href="#" class="link"></a>
                            <div class="overlay">
                                <div class="text">
                                    <span class="flaticon-infrastructure icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <h2><a href="#">Capital Projects & Infrastructure</a></h2>
                            <p>Specialized capabilities to help clients face the challenges of today. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-1 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/product-section-1.jpg')}}" class="img-responsive"
                                alt="product-img">
                            <a href="#" class="link"></a>
                            <div class="overlay">
                                <div class="text">
                                    <span class="flaticon-idea-1 icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <h2><a href="#">Energy & Utilities</a></h2>
                            <p>Significant value by providing security solutions across industry verticals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-1">
        <div class="container">
            <div class="row">
                <div class="column-inner-1 col-lg-6 col-md-6 col-xs-12 col-md-12">
                    <div class="column-1-inner">
                        <h1 class="start-up">Start up your New Career Ventures With <span>Global State IT
                                Solution</span></h1>
                        <p class="para">Global State IT Solutions is one of the world’s best business consulting firms.
                            We help global leaders with their organization's most critical issues and opportunities.
                        </p>
                    </div>
                </div>
                <div class="column-inner-2 col-lg-6 col-md-6 col-xs-12 col-md-12">
                    <div class=" column-2-inner">
                        <div class="text-inner-1">
                            <div class="icon">
                                <a href="#"><span class="flaticon-shout icon"></span></a>
                            </div>
                            <div class="text-left">
                                <h2> <a href="#">A Global Network</a></h2>
                                <p>That empathy of business ownership creates the relationship they required to actually
                                    make a difference.</p>
                            </div>
                        </div>
                        <div class="text-inner-1">
                            <div class="icon">
                                <a href="#"> <span class="flaticon-lightbulb icon"></span></a>
                            </div>
                            <div class="text-left" style="padding-left: 0px;">
                                <h2><a href="#">Commitment to Innovation</a> </h2>
                                <p>Over 20 years we have been advising a diverse range of businesses on how they can
                                    find a competitive advantage.</p>
                            </div>
                        </div>
                        <div class="text-inner-1">
                            <div class="icon">
                                <a href="#"> <span class="flaticon-partnership icon"></span></a>
                            </div>
                            <div class="text-left">
                                <h2><a href="#">Building Trusted Partnership </a></h2>
                                <p>We partner with clients to put recommendations into practice and work directly with
                                    them over the long-term.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
       Clients Section
       ============================-->
    <section id="clients">
        <div class="container">
            <div class="owl-carousel owl-theme owl-logo">
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-1.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-2.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-3.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-4.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-5.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-6.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-1.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-2.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-3.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-4.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-5.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
                <div class="item">
                    <img src="{{asset('frontend/homepage1/img/c-logo-6.png')}}" class="img-responsive" width="150"
                        height="150" alt="logo" />
                </div>
            </div>
        </div>
    </section>
    <!-- #clients -->
    <div class="our-services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-head">
                        <h1>Our <span>Services</span></h1>
                        <p>Global State IT Solutions Consulting understands that to help meet client challenges and
                            <br> opportunities successfully in a global economy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6 col-xs-12">
                    <div class="service-1 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/s-1.jpg')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <a href="#" class="link"></a>
                                <div class="text-1">
                                    <span class="flaticon-powerpoint service"></span>
                                    <p>Software Developmet</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-powerpoint service-in"></span>
                            <h2>Software Developmet</h2>
                            <p>Committed to clients success, our professionals risks and opportunities.</p>
                            <h6> <a href="{{ url('/services') }}">Read More<i class="flaticon-next"></i></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="service-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/s-2.jpg')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <a href="#" class="link"></a>
                                <div class="text-1">
                                    <span class="flaticon-coach service"></span>
                                    <p>Strategic Planning</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-coach service-in"></span>
                            <h2>Strategic Planning</h2>
                            <p>We also have deep expertise in antitrust issues, mergers and acquisitions.</p>
                            <h6> <a href="{{ url('/services') }}">Read More<i class="flaticon-next"></i></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="service-1 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/s-3.jpg')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <a href="#" class="link"></a>
                                <div class="text-1">
                                    <span class="flaticon-speaker service"></span>
                                    <p>Global Consulting</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-speaker service-in"></span>
                            <h2>Global Consulting</h2>
                            <p>Our team supports clients high stakes arbitration and compliance investigations.</p>
                            <h6> <a href="{{ url('/services') }}">Read More<i class="flaticon-next"></i></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6  col-xs-12">
                    <div class="service-1 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/s-4.jpg')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <a href="#" class="link"></a>
                                <div class="text-1">
                                    <span class="flaticon-support service"></span>
                                    <p>IT Security</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-support service-in"></span>
                            <h2>IT Security</h2>
                            <p>Our broad network with key influencers, we reaches the audience at the right time.</p>
                            <h6> <a href="{{ url('/services') }}">Read More<i class="flaticon-next"></i></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/s-5.jpg')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <a href="#" class="link"></a>
                                <div class="text-1">
                                    <span class="flaticon-stock service"></span>
                                    <p>Workforce Management</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-stock service-in"></span>
                            <h2>Workforce Management</h2>
                            <p>We also analyze financial data to assist companies with risk avoidance..</p>
                            <h6> <a href="{{ url('/services') }}">Read More<i class="flaticon-next"></i></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="service-1 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-1">
                            <img src="{{asset('frontend/homepage1/img/s-6.jpg')}}" class="img-responsive"
                                alt="product-image">
                            <div class="overlay-1">
                                <a href="#" class="link"></a>
                                <div class="text-1">
                                    <span class="flaticon-user service"></span>
                                    <p>Migration Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="txt-inner">
                            <span class="flaticon-user service-in"></span>
                            <h2>Migration Services</h2>
                            <p>We can also assist with the recovery of assets lost to fraud and identify..</p>
                            <h6> <a href="{{ url('/services') }}">Read More<i class="flaticon-next"></i></a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="client-testimonial">
        <div class="container">
            <div class="row">
                <div class="heading col-md-4 col-xs-12 col-sm-12">
                    <h1><span>Client</span> Testimonals</h1>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-12">
                    <p class="main-para">Our world is at an inflection point, with technology transforming our clients,
                        our profession, and society at large.
                    </p>
                </div>
            </div>
            <div class="row owl-testimonial">
                <div class="owl-carousel owl-theme owl-client">
                    <div class="item">
                        <div class="testimonial-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="testimonial-bg-image">
                                <img src="{{asset('frontend/homepage1/img/c-test0.jpg')}}" class="img-responsive"
                                    alt="image" width="530" height="370" />
                                <a href="#" class="link"></a>
                                <div class="overlay">
                                </div>
                            </div>
                            <div class="client-text">
                                <div class="heading clearfix">
                                    <div class="col-cont pull-left">
                                        <h3> Elizabeth</h3>
                                        <p class="sub">Sydney, Australia</p>
                                    </div>
                                    <div class="icon pull-right">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                                    <p class="bor">Come to DelWare to do the best work, with the best teams and truly be
                                        at your best. Problem solvers and creative thinkers. Engineers and new business
                                        builders.</p>
                                    <h6><a href="#">Read More <i class="flaticon-next"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-outer-right wow fadeInRight" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="testimonial-bg-image">
                                <img src="{{asset('frontend/homepage1/img/c-test.jpg')}}" class="img-responsive"
                                    alt="image" width="530" height="370" />
                                <a href="#" class="link"></a>
                                <div class="overlay">
                                </div>
                            </div>
                            <div class="client-text-right">
                                <div class="heading clearfix">
                                    <div class="col-cont pull-left">
                                        <h3> Elizabeth</h3>
                                        <p class="sub">Sydney, Australia</p>
                                    </div>
                                    <div class="icon pull-right">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                                    <p class="bor">Experienced professional or a recent graduate, working with DelWare
                                        could be a challenging and rewarding next step in your career. Opportunities are
                                        limitless and every day makes a difference.</p>
                                    <h6><a href="#">Read More <i class="flaticon-next"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="testimonial-bg-image">
                                <img src="{{asset('frontend/homepage1/img/c-test0.jpg')}}" class="img-responsive"
                                    alt="image" width="530" height="370" />
                                <a href="#" class="link"></a>
                                <div class="overlay">
                                </div>
                            </div>
                            <div class="client-text">
                                <div class="heading clearfix">
                                    <div class="col-cont pull-left">
                                        <h3> Elizabeth</h3>
                                        <p class="sub">Sydney, Australia</p>
                                    </div>
                                    <div class="icon pull-right">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                                    <p class="bor">Come to DelWare to do the best work, with the best teams and truly be
                                        at your best. Problem solvers and creative thinkers. Engineers and new business
                                        builders.</p>
                                    <h6><a href="#">Read More <i class="flaticon-next"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-outer-right wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="testimonial-bg-image">
                                <img src="{{asset('frontend/homepage1/img/c-test.jpg')}}" class="img-responsive"
                                    alt="image" width="530" height="370" />
                                <a href="#" class="link"></a>
                                <div class="overlay">
                                </div>
                            </div>
                            <div class="client-text-right">
                                <div class="heading clearfix">
                                    <div class="col-cont pull-left">
                                        <h3> Elizabeth</h3>
                                        <p class="sub">Sydney, Australia</p>
                                    </div>
                                    <div class="icon pull-right">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:0px;">
                                    <p class="bor">Experienced professional or a recent graduate, working with DelWare
                                        could be a challenging and rewarding next step in your career. Opportunities are
                                        limitless and every day makes a difference.</p>
                                    <h6><a href="#">Read More <i class="flaticon-next"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Integrated <span>Management,</span> Process, and change Technologies</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="employees same wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <p><span class="counter-count" data-speed="7000">90</span> <small>+</small></p>
                        <p class="employee-p">Countries Served</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="customer same wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <p><span class="counter-count" data-speed="7000">12</span> <a class="txt">K</a><small>+</small>
                        </p>
                        <p class="employee-p">Consultants Worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="design same wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <p><span class="counter-count" data-speed="7000">72</span> <small>+</small></p>
                        <p class="employee-p">Completed Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="order same wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <p><span class="counter-count" data-speed="7000">20</span> <small>+</small></p>
                        <p class="employee-p">Technologies</p>
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
                    <a class="btn1" href="{{ url('/contact') }}"
                        style="transition: none 0s ease 0s; line-height: 30px; border-width: 2px solid #2685f9; margin: 0px; padding: 10px 33px; border-radius: 30px 30px; letter-spacing: 0px; font-weight: 600; font-size: 18px; background: #2685f9; color: white; float: right;">Contact
                        Now</a>

                </div>
            </div>
        </div>
    </div>

</main>
@include("frontend.includes.footer")
@endsection

@section('scripts')
<script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('frontend/js/nav-scripts.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Core jQuery Script -->
<script src="{{asset('frontend/homepage1/js/jquery.js')}}"></script>

<!---Slider Revolution core JavaScript files ---->
<script src="{{asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING-->
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('frontend/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('frontend/homepage1/owl/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/homepage1/js/other.js')}}"></script>
<!-- script JS  -->
<script src="{{asset('frontend/js/preload.js')}}"></script>
@endsection
