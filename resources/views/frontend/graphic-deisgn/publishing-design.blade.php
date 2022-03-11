<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') PUBLISHING DESIGN @endsection
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
                    <img src="{{ asset('assets/img/subpages/publish-design.jpg') }}" alt="publish-design" />
                </div>
                <div class="col-2">
                    <h1 class="heading font-3 text-left">
                        PUBLISHING <span>DESIGN</span>
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
                <h1>PUBLISHING DESIGN</h1>
                <p>
                     The price of hiring WSZ graphical team may put you off, but it is worth investing in a good one. Before dismissing any idea and marching off to design your publishing product like book yourself, ask yourself these questions: do you know anything about typography?; have you ever designed a book before?; do you have access to professional publishing software?; and can you really make something better than a pro could? If the answer to any of these is ‘no’, then you should reconsider going it alone, and start with our experienced designer.
                </p>
                <p>
                    The cover is what gets you noticed, and is what people see first online or on the bookshelves, so it’s best if you have something that not only looks professional, but also stands out on both a bookshelf, or as a thumbnail. Most books are bought online now, and they buy on the basis of that thumbnail – so it had better be a good one.
                </p>
                <p>
                    Above all, our professional designer can offer you expert advice on how to make your publishing prodct look and feel fantastic. By working with you, we can find out the tone and feel of your book, and tell you how your words and images or typography can work together to achieve what you’re going for.
                </p>
                <?php echo FunctionsController::get_a_quote('publishing-design'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
