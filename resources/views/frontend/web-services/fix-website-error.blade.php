<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Fix Website Error @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/fix-error.css') }}">
@endsection


@section('content')


<div class="web_single_page">
    <div class="services">
        <div class="container-fluid"> 
            <div class="service-item item-left">
                <div class="col-1">
                    <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
    	                    <source src="{{ asset('/assets/img/subpages/fixing_error.mp4') }}" type="video/mp4">
    	                    <source src="movie.ogg" type="video/ogg">
    	                     Your browser does not support the video tag.
    	           </video>
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        Error Fixing
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
        

<div class="global_services error-fixing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/error.png') }}" width="80" height="80" alt="error">
                        <a class="title">Server Error</a>
                        <p>We are ready to fix any kind of server error like(301,401,500) etc </p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/browser.png') }}" width="80" height="80" alt="browser">
                        <a class="title">Syntax Error</a>
                        <p>We are ready to fix any kind of syntax error.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/database-error.png') }}" width="80" height="80" alt="database-error">
                        <a class="title">Database Error</a>
                        <p>WE are here to fix your any kind of database error</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/ssl.png') }}" width="80" height="80" alt="ssl">
                        <a class="title">SSL Issue</a>
                        <p>We are ready to install ssl on your domain.</p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</div>


<div class="error-fixing-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <h1>
                    Error Fixing
                </h1>
                <div class="spacer-20"></div>
                <ul>
                    <li>Fix code/script issues (PHP, HTML, CSS, etc.)</li>
                    <li>Fix Theme and Plugin related Issues</li>
                    <li>Email Delivery Errors</li>
                    <li>Clean Malware or Malicious code</li>
                    <li>Social Login Error</li>
                    <li>Website Migration Error</li>
                    <li>Payment Gateway Integration error</li>
                    <li>WooCommerce Errors</li>
                    <li>404 error</li>
                    <li>Wordpress critical error </li>
                    <li><b>And many more...</b></li>
                </ul>
                <div class="spacer-50"></div>
                <div class="action">
                    <?php echo FunctionsController::get_a_quote('fix-website-error'); ?>
                </div>
            </div>
            <div class="col-2">
                <img src="{{ asset('/assets/img/subpages/error-fix.gif') }}" alt="error-fix">    
            </div>
        </div>
    </div>
</div>



@endsection


@section('js')

@endsection
