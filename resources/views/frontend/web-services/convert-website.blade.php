@extends('frontend.layout')

@section('title') Convert Website @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/website-development.css') }}">
@endsection


@section('content')

<div class="body_overlay"></div>

<div class="web_single_page">

<div class="services">
    <div class="container-fluid"> 
        <div class="service-item item-left">
            <div class="col-1">
                <video width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
	                    <source src="{{ asset('/assets/img/subpages/convert_website.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
            </div>
            <div class="col-2">
                <h1 class="heading font-3 text-left">
                    Convert <span>Website</span>
                </h1>
            </div>
        </div>
    </div>
</div>
        
        
<div class="global_services website-development">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/psd.png') }}" width="80" height="80" alt="psd">
                        <a class="title" href="javascript:void(0)">PSD to Website</a>
                        <p>WorldSoftZone are providing PSD to WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your PSD. </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="psd">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/xd.png') }}" width="80" height="80" alt="xd">
                        <a class="title" href="javascript:void(0)">XD to Website</a>
                        <p>
                            WorldSoftZone are providing XD to WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your XD. 
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="xd">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/figma.png') }}" width="80" height="80" alt="figma">
                        <a class="title" href="javascript:void(0)">Figma to Webstie</a>
                        <p>WorldSoftZone are providing Figma to WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your Figma.</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="figma">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/canva.png') }}" width="80" height="80" alt="canva">
                        <a class="title" href="javascript:void(0)">Canva to Website</a>
                        <p>WorldSoftZone is providing Canva to WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your Canva. </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="canva">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/pdf.png') }}" width="80" height="80" alt="pdf">
                        <a class="title" href="javascript:void(0)">PDF to Website</a>
                        <p>WorldSoftZone is providing PDF to WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your PDF.</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="pdf">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/html.webp') }}" width="80" height="80" alt="html">
                        <a class="title" href="javascript:void(0)">HTML to Dynamic Website</a>
                        <p>WorldSoftZone is providing static HTML to dynamic WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your html site.</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="html">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/clone.png') }}" width="80" height="80" alt="clone">
                        <a class="title" href="javascript:void(0)">Clone Website</a>
                        <p>WorldSoftZone is providing clone/copy/ duplicate any site to WordPress/PHP/Laravel web development services. We commit that you will get 100% pixel-perfect design as per your model site.</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="clone">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
        
    </div>
</div>


<div id="details" style="display: none;">
    <span class="close_popup">
        <img src="{{ asset('assets/img/close.png') }}" alt="close">
    </span>
    <div id="content">
       <div class="preloader" style="top: 60px">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                  <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                </circle>
            </svg>
        </div>
    </div>
</div>

<div class="preloader_wrapper" style="display: none; ">
    <div class="preloader" style="top: 60px">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
              <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
            </circle>
        </svg>
    </div>
</div>

@endsection


@section('js')

    <script>
        $(document).ready(function(){
            $(".service-box .bottom a").click(function(e){
                e.preventDefault();
                var rel = $(this).attr('rel');
                $(".body_overlay").addClass("active");
                $("#details").fadeIn("fast");
                $.ajax({
                    url: "{{ url('/web-services/convert-website') }}/"+rel,
                    method: 'get',
                    dataType: 'html',
                    success: function(response){
                        $("#details #content").html(response);
                    }
                })
            })
            
            $(document).on("click", ".close_popup", function(){
                $(".body_overlay").removeClass("active");
                $("#details").fadeOut("fast", function(){
                    var pr = $(".preloader_wrapper").html();
                    $("#details #content").html(pr);
                }); 
            })
        })
    </script>

@endsection
