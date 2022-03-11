<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') BRANDING DESIGN @endsection
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
                    <img src="{{ asset('assets/img/subpages/branding-design.jpg') }}" alt="branding-design" />
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        BRANDING <span>DESIGN</span>
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
                <h1>BRANDING DESIGN</h1>
                <p>
                    Branding design helps your audience recognize your company, products, and content. Probably the most well-known advantage of branding is how it helps you identify with your audience. When you see a sign, letterhead, logo or blog post, it should be clear what company created it. Let’s take a look how we branding and how it elevates your business.
                </p>
                <h4>Creates Continuity</h4>
                <p>
                    We also help you create a sense of continuity among all of your business’ assets. When you have the same fonts, colors, and layout throughout your content, it will be easier for audiences to recognize your company no matter where they see it.
                </p>
                <h4>Communicates Effectively with Your Audience</h4>
                <p>
                    Your branding acts as a means of communication with your target audience, while your design elements work together to convey specific messages about your business. For example, your logo might express what kind of services you offer. Or, if your company produces sleek, modern furniture, your social media graphics might be minimalist and clean.
                </p>
                <h4>Exhibits Authority and Relevance</h4>
                <p>
                    Because branding allows for continuity throughout your materials and content, it also creates a sense of professionalism and authority. A branded approach is going to make your entire presence look that much more put together and planned out. Your audience will be able to clearly see why your company’s content and products are relevant to them.
                </p>
                <h4>Enlist an Experienced Design Team:</h4>
                <p>
                    Looking to create a branding strategy that pays off? The WorldSoftZone (WSZ) Marketing team is here to help. Check out our portfolio and contact us today to find out how we can use design to grow your business.
                </p>
                
                <?php echo FunctionsController::get_a_quote('branding-design'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
