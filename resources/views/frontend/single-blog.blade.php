<?php error_reporting(0); ?>
@extends('frontend.layout')

@section('css')
<style>
    .portfolio_wsz .card-wrapper .card {
        margin: 0;
        width: 100%;
        padding: 30px;
    }
    .portfolio_wsz .card-wrapper .card .media img {
        width: auto;
        height: auto;
    }
    .portfolio_wsz .card-wrapper .content, .portfolio_wsz .card-wrapper .content p {
        color: #000 !important;
        text-align: left;
    }
    
    .portfolio_wsz .card-wrapper .card .media {
        text-align: left;
    }
    
    .portfolio_wsz .card-wrapper .card h1 {
        text-align: left;
    }
    .portfolio_wsz .card-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }
</style>
@endsection


@section('content')


<div class="service-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="heading font-3 text-center">
                    <span>{{ $get_data->post_title }}</span>
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="portfolio_wsz blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card-wrapper">
                    <div class="card">
                        <div class="media">
                            <img src="{{ url('/'.$get_data->post_image) }}"  alt="{{ $get_data->post_title }}">
                        </div>
                        <h1>
                            {{ $get_data->post_title }}
                        </h1>
                        <div class="content">
                            <?php echo $get_data->post_description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')


@endsection
