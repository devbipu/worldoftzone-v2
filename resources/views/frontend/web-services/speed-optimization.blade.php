<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Speed Optimization @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/website-development.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/speed-optimization.css') }}">
<style>
    .speed-opt-2{
        background: #481438 url({{ asset('assets/img/subpages/speed-opt-bg.jpg') }}) no-repeat;
        background-position: right center;
        background-size: cover;
    }
</style>
@endsection


@section('content')

<div class="web_single_page">
    <div class="services">
        <div class="container-fluid"> 
            <div class="service-item item-left">
                <div class="col-1">
                    <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
    	                    <source src="{{ asset('/assets/img/subpages/speed_optimization.mp4') }}" type="video/mp4">
    	                    <source src="movie.ogg" type="video/ogg">
    	                     Your browser does not support the video tag.
    	           </video>
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        Speed <span>Optimization</span>
                    </h1>
                </div>https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcuts
            </div>
        </div>
    </div>
</div>



<div class="global_services website-development speed-opt">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/search-optimization.png') }}" width="80" height="80" alt="search-optimization">
                        <a class="title">Search Optimization</a>
                        <p>We are ready to do world-class SEO of your site.</p>
                        <a class="over_link" href="{{ url('/quote?subject=search-optimization') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/speed-optimization.png') }}" width="80" height="80" alt="speed-optimization">
                        <a class="title">Speed Optimization</a>
                        <p>We are ready to make your website super fast</p>
                        <a class="over_link" href="{{ url('/quote?subject=speed-optimization') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/page-optimization.png') }}" width="80" height="80" alt="page-optimization">
                        <a class="title">Page Optimization</a>
                        <p>We are ready to do your website page optimize.</p>
                        <a class="over_link" href="{{ url('/quote?subject=page-optimization') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/website-optimization.png') }}" width="80" height="80" alt="website-optimization">
                        <a class="title">Website Optimization</a>
                        <p>We are ready to do your full website optimization.</p>
                        <a class="over_link" href="{{ url('/quote?subject=website-optimization') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/ecommerce-optimization.png') }}" width="80" height="80" alt="ecommerce-optimization">
                        <a class="title">eCommerce Optimization</a>
                        <p>We are ready to do your eCommerce website optimization.</p>
                        <a class="over_link" href="{{ url('/quote?subject=ecommerce-optimization') }}"></a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</div>


<div class="speed-opt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <h1>
                    Fast, Faster, FASTEST for:
                </h1>
                <div class="spacer-20"></div>
                <ul>
                    <li>WordPress page speed fixes</li>
                    <li>Mobile optimization</li>
                    <li>Database optimization</li>
                    <li>Theme & plugin optimization</li>
                    <li>Caching configuration</li>
                    <li>Detailed reporting & before and after analysis</li>
                    <li>Set up & Fixing CDN</li>
                    <li>Woocommerce speed optimization </li>
                    <li>Minimizing minification boost</li>
                </ul>
                <div class="spacer-50"></div>
                <div class="action">
                    <a class="btn btn-2">
                        <span class="text">Select to Start Your Project</span> 
                    </a>
                </div>
            </div>
            <div class="col-2">
                
            </div>
        </div>
    </div>
</div>
        

@endsection


@section('js')

@endsection
