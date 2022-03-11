<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Motion Graphic @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/single-graphic.css') }}">
@endsection


@section('content')
<div class="web_single_page">
    <div class="services">
        <div class="container-fluid"> 
            <div class="service-item item-left">
                <div class="col-1">
                    <video width="100%" id="motion_graphic" height="auto" loop="" autoplay="" muted="" preload="none">
                        <source src="{{ asset('/assets/img/subpages/motion-graphic-single.mp4') }}" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                         Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        MOTION <span>GRAPHIC</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-graphic-template">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h1>MOTION GRAPHIC</h1>
                <p>
                    A healthy content strategy includes a mix of content, including articles, infographics, e-books, and more. But there’s no denying people are more and more interested in video. More media platforms support video, and people are coming to prefer—if not expect—information to be delivered in that package. 
                    </p>
                <p>
                    For you, this is an exciting opportunity to explore motion graphics. No matter your communication needs, there are plenty of applications for motion graphics at all touchpoints.
                </p>
                <p>
                     Traditional ads: Online or television commercials (national or regional).
                </p>
                <p>
                     Promo videos: Viral videos, case studies, testimonials, product reviews—anything that publicizes your work or brand. May be editorial or advertorial.
                </p>
                <p>
                     Explainer videos: Introductions, overviews, processes, tutorials for products, services, or ideas.
                </p>
                <p>
                     Culture marketing videos: Content to showcase your brand, people, or causes.
                </p>
                <p>
                     Social videos: Content to engage followers on social—Facebook, Instagram, Snapchat, YouTube, etc. May be educational or pure entertainment.
                </p>
                <p>
                     Sales collateral: Company info, product info, or anything that a sales team regularly communicates. 
                </p>
                
                <?php echo FunctionsController::get_a_quote('motion-graphic'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
