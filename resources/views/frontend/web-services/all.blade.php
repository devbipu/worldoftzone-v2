@extends('frontend.layout')

@section('title') Web Services @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
@endsection


@section('content')

<div class="service-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="heading font-3">
                    <span>WE WILL SATISFY YOU</span>
                    <span>WITH OUR SERVICE</span>
                </h1>
                <p>we believe on our service quality and commitment.</p>
            </div>
        </div>
    </div>
</div>


<div class="services">
    <div class="container-fluid">  
        <div class="service-item item-left">
            <div class="col-1">
                <h1 class="heading font-3">
                    Website Development
                </h1>
                
                <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
	                    <source src="{{ asset('/assets/img/subpages/web-development.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/web-services/website-development') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
            <div class="col-2">
                <h1>01</h1>
            </div>
        </div>
        <div class="service-item item-right">
            <div class="col-2">
                <h1>02</h1>
            </div>
            <div class="col-1">
                <h1 class="heading font-3 text-right">
                    Convert Website
                </h1>
                <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
	                    <source src="{{ asset('/assets/img/subpages/convert_website.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
                
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/web-services/convert-website') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
        </div>
        <div class="service-item item-left">
            <div class="col-1">
                <h1 class="heading font-3">
                    Theme Development & Customization
                </h1>
                <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
	                    <source src="{{ asset('/assets/img/subpages/theme_development.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/web-services/theme-development-customization') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
            <div class="col-2">
                <h1>03</h1>
            </div>
        </div>
        <div class="service-item item-right">
            <div class="col-2">
                <h1>04</h1>
            </div>
            <div class="col-1">
                <h1 class="heading font-3 text-right">
                    Fix Website Error
                </h1>
                <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
	                    <source src="{{ asset('/assets/img/subpages/fixing_error.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/web-services/fix-website-error') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
            </div>
        </div>
        <div class="service-item item-left">
            <div class="col-1">
                <h1 class="heading font-3">
                    Speed Optimization
                </h1>
                <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
	                    <source src="{{ asset('/assets/img/subpages/speed_optimization.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/web-services/speed-optimization') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
            <div class="col-2">
                <h1>05</h1>
            </div>
        </div>
        
    </div>
</div>




@endsection


@section('js')

@endsection
