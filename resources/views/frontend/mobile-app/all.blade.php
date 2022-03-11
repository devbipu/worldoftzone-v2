@extends('frontend.layout')

@section('title') Mobile App @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/mobile-app.css') }}">
<style>
    
    .mobile_app_services {
        background: #172228 url('assets/img/subpages/mobile-app.jpg') no-repeat;
        background-size: cover;
        background-position: center center;
    }

</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">Create Mobile App <span>
            Better Customer Connection
        </span></h1>
    </div>
</div>
    
<div class="mobile_app_services">
 
    <div class="global_services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <div class="apps">
	                   <img src="assets/img/apple.png" alt="apple">
	                   <h2>iOS</h2>
	                    <a class="btn btn-1" href="{{ url('/mobile-app/android-app-development') }}">
	                        View Details
	                    </a>
	                </div>
                    <div class="apps">
	                   <img src="assets/img/android.png" alt="android">
	                   <h2>Android</h2>
	                    <a class="btn btn-1" href="{{ url('/mobile-app/ios-app-development') }}">
	                        View Details
	                    </a>
	                </div>
                    <div class="apps">
	                   <img src="assets/img/react.png" alt="android">
	                   <h2>React-Native</h2>
	                    <a class="btn btn-1" href="{{ url('/mobile-app/react-native') }}">
	                        View Details
	                    </a>
	                </div>
                </div>
                <div class="col-2 text-right">
                    <img src="{{ asset('/assets/img/gif/mobile-app.gif') }}">
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@section('js')

@endsection
