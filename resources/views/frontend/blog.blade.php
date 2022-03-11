<?php error_reporting(0); ?>
@extends('frontend.layout')

@section('title') Portfolio @endsection
@section('css')
<style>
    .portfolio_wsz .card-wrapper .card {
        margin: 1.5% !important;
    }
    .portfolio_wsz .card-wrapper .card {
        width: 30.3%;
    }
    .portfolio_wsz .card-wrapper .card  .media {
        height: 295px;
    }
    .portfolio_wsz .card-wrapper .card img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .portfolio_wsz .card-wrapper .card a span {
        transition: 0.2s;
        margin-bottom: 20px;
    }
    .portfolio_wsz .card-wrapper .card:hover span {
        color: #1987b8;
    }
    .portfolio_wsz .card-wrapper .card a span {
        transition: 0.2s;
    }
    
    @media (max-width: 767px){
        
        .portfolio_wsz .card-wrapper .card {
            width: 100%;
        }
        .portfolio_wsz .card-wrapper .card .media {
            height: auto;
        }
        .portfolio_wsz .card-wrapper .card .media img {
            max-width: 100%;
            width: auto;
        }
        
    }
</style>
@endsection


@section('content')


<div class="service-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="heading font-3 text-center">
                    <span>Our Blogs</span>
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
                    @if($get_data->count() > 0)
                        @foreach($get_data as $data)
                            <div class="card">
                                <a href="{{ url('/blog/'.$data->post_slug) }}">
                                    <div class="media">
                                        <img src="{{ url('/'.$data->post_image) }}"  alt="{{ $data->post_title }}">
                                    </div>
                                    <span>
                                        {{ $data->post_title }}
                                    </span>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')


@endsection
