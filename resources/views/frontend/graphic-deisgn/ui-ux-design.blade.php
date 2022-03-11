<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') UI UX Design @endsection
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
                    <img src="{{ asset('assets/img/subpages/ui-ux-design.jpg') }}" alt="ui-ux-design" />
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        UI UX <span>DESIGN</span>
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
                <h1>UI UX Design</h1>
                <p>
                    Creating a user-friendly interface design requires a lot of moving parts, but some are more important than others. WorldSoftZone focus on three most important items to consider for good user interface design are increased user control, user comfort, and providing a low cognitive load.
                </p>
                <h4>1 – User Control</h4>
                <p>
                    You want to give your visitors as much control as possible. It helps them feel comfortable and responsible for their own actions. While your design might use subtle cues that help guide them, you want them to have the options to take action and then reverse that action if they need to. The simple act of being forgiving on your website will reduce the likelihood that your visitors get frustrated with the site design and increase the chances of them sticking around.
                </p>
                <h4>2 – Increase Comfort Levels</h4>
                <p>
                    Another way to create seamless user interface design is to make it more comfortable for your visitors to navigate and interact with your website, products, and services. Reduce the amount of irrelevant information that you have on your website, so you clearly communicate your site intent and important information about products or services. 
                </p>
                <h4>3 – Reduce Cognitive Load</h4>
                <p>
                    Finally, we put some thought into what kind of action you want people to take when they’re on your website and reduce any extra noise. Straightforward, simple, and easy to understand to be more effective. 
                </p>
                
                <?php echo FunctionsController::get_a_quote('ui-ux-design'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
