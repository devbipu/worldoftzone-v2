<?php error_reporting(0); ?>
@extends('frontend.layout')


@section('css')

@endsection


@section('content')

<div class="portfolio_wsz team_wsz">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <div class="filter-button">
                    <button type="button">
                        <img src="{{ asset('assets/img/filter.png') }}">
                    </button>
                </div>
                <div class="filter-by">
                    <h2>Designation</h2>
                    <ul class="designation">
                        <li>
                            <a class="active" href="javascript:void(0)" rel="all">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="developer">Developer</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="graphic-designer">Graphic Designer</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="product-designer">Product Designer</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="degital-marketing">Degital Marketing</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="administrative">Administrative</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="accounts-finance">Accounts & Finance</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="support">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div class="preloader" style="display: none">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                          <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                        </circle>
                    </svg>
                </div>
                <div class="card-wrapper">
                    @if(count($get_team) > 0)
                        <?php
                            function compare($a, $b){
                               return ($a['order'] > $b['order']);
                            }
                            usort($get_team, "compare");
                        ?>
                        @foreach($get_team as $value)
                            <div class="card {{ $value['class'] }} {{ $value['id'] }}">
                                <a>
                                    <img src="{{ asset('assets') }}/img/team/{{ $value['photo'] }}" alt="{{ $value['name'] }}">
                                    <span>
                                        {{ $value['name'] }}
                                        <span>{{ $value['designation'] }}</span>
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
<script>

    $(document).ready(function(){
        
        $(".filter-button button").click(function(){
            $(".filter-by").toggleClass("active");
        });
        
        $(".portfolio_wsz .col-1 ul.designation li a").click(function(){
            $(".portfolio_wsz .col-1 ul.designation li a").removeClass("active"); 
            get_team($(this));
        })
    })
    
      
    
    function get_team(current){
        current.addClass("active");
        var rel = current.attr('rel');
        
        
        $(".preloader").css("display", "block");
        $(".card-wrapper").css("opacity", 0);
        
        setTimeout(function(){
           $(".preloader").css("display", "none");
            $(".card-wrapper").css("opacity", 1);
        }, 500)
        
        if(rel == 'all'){
            $(".card-wrapper .card").css('display', 'block');
            $(".card-wrapper .card.hide_on_home").css('display', 'none');
        }else{
            $(".card-wrapper .card").css('display', 'none');
            $(".card-wrapper .card."+rel).css('display', 'block');
        }
    }
    
</script>

@endsection
