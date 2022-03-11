<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') PRINT DESIGN @endsection
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
                    <img src="{{ asset('assets/img/subpages/print-design.jpg') }}" alt="print-design" />
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        PRINT <span>DESIGN</span>
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
                <h1>
                    Print Design
                </h1>
                <p>
                    Along with a solid online presence, print marketing design can be essential to your business’ success.  We’ve all heard the saying “print is dead,” but this is simply untrue. Print is still an effective, widely used form of marketing and will continue to be so for years to come, and there are many reasons why.
                </p>
                <p>
                    Print marketing can help you stand out from the competition</p>
                <p>Print is portable and tangible</p>
                <p>Not everyone is using the web.</p>
                <p>Print marketing solidifies your brand</p>
                <?php echo FunctionsController::get_a_quote('print-design'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
