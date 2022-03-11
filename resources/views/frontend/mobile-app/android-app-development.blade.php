<?php
use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Android App Development @endsection
@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/single-mapp.css">
<style>
    .single-template {
        background: #baf0fa url(https://demo.wibsas.com/worldsoftzone-new/assets/img/single/android-app-bg.png) no-repeat;
        background-size: cover;
        background-position-x: 95%;
        min-height: 100vh;
    }
</style>

@endsection


@section('content')


<div class="single-template">
    <div class="container-fluid">
        <div class="mapp">
            <h1 class="heading font-3">Android App <span>Development</span></h1>
            <ul>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">User Registration System including social logins</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">Custom App according to client requirements</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">App submission to Playstore or</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">Design the complete professional App UI.</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">App of your business</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">E-Commerce App , WooCommerce App</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text">Native mobile development using android studio and Xcode</span>
                </li>
                <li>
                    <span class="icon"><img src="{{ asset('/assets/img/mapp-icon.png') }}" alt="mapp-icon"/></span>
                    <span class="text"><b>And also many more what's you want.</b></span>
                </li>
            </ul>
            
            <?php echo FunctionsController::get_a_quote('android-app-development'); ?>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
