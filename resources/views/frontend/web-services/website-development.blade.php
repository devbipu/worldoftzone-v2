@extends('frontend.layout')

@section('title') Website Developmen @endsection
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
	                    <source src="{{ asset('/assets/img/subpages/web-development.mp4') }}" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	           </video>
                
            </div>
            <div class="col-2">
                 <h1 class="heading font-3">
                    Website <span>Development</span>
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
                        <img src="{{ asset('/assets/img/logo/wordpress.png') }}" width="80" height="80" alt="wordpress">
                        <a class="title" href="#">WordPress</a>
                        <p>
                        WordPress is the most famous CMS in the world. You can change, edit, delete all of the content, images visually. No coding skill is required to maintain your site.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="wordpress">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/shopify.png') }}" width="80" height="80" alt="shopify">
                        <a class="title" href="#">Shopify</a>
                        <p>
                            For dropshipping businesses, Shopify is one of the best CMS. You can start your business by sign up and creating a Shopify store. 
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="shopify">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/wix.svg') }}" width="80" height="80" alt="wix">
                        <a class="title" href="#">WIX</a>
                        <p>Wix will not only let you create a beautiful website, but also provide suitable domain for free. You can also count on their SEO-optimized, secure; manage, and track the performance of your website all from a single db.</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="wix">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/squarespace.png') }}" width="80" height="80" alt="squarespace">
                        <a class="title" href="#">Squarespace</a>
                        <p>Its user interface is fantastic — I'd argue that Squarespace has one of the most user-friendly content management systems available. Its image management options are excellent. It provides a good range of import tools for importing content from other platforms.</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="squarespace">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/laravel.png') }}" width="80" height="80" alt="laravel">
                        <a class="title" href="#">Laravel</a>
                        <p>Laravel is primarily used for building custom web apps using PHP. It's a web framework that handles many things that are annoying to build yourself, such as routing, templating HTML, and authentication</p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="laravel">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/codeigniter.png') }}" width="80" height="80" alt="codeigniter">
                        <a class="title" href="#">Codeigniter</a>
                        <p>
                            CodeIgniter is a PHP MVC framework used for developing web applications rapidly. CodeIgniter provides out of the box libraries for connecting to the database and performing various operations like sending emails, uploading files, managing sessions, etc.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="codeigniter">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/YII2.png') }}" width="80" height="80" alt="YII2">
                        <a class="title" href="#">YII2</a>
                        <p>
                            Yii is a high-performance, component-based PHP framework for developing large-scale Web applications rapidly. It enables maximum reusability in Web programming and can significantly accelerate your Web application development process.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="yii2">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/logo/reactjs.png') }}" width="80" height="80" alt="reactjs">
                        <a class="title" href="#">ReactJS</a>
                        <p>
                            Easy creation of dynamic applications: React makes it easier to create dynamic web applications because it requires less coding and offers more functionality, as opposed to JavaScript, where coding often gets complex very quickly. Improved performance: React uses Virtual DOM, thereby creating web applications faster
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="javascript:void(0)" rel="reactjs">
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
                    url: "{{ url('/web-services/website-development/') }}/"+rel,
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
