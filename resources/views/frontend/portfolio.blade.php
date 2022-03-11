@extends('frontend.layout')

@section('title') Portfolio @endsection
@section('css')

@endsection


@section('content')

<div class="portfolio_wsz">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <div class="filter-button">
                    <button type="button">
                        <img src="{{ asset('assets/img/filter.png') }}">
                    </button>
                </div>
                <div class="filter-by">
                    <h2>Website</h2>
                    <ul class="website">
                        <li>
                            <a class="active" href="javascript:void(0)" data-id="website" rel="all">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="website" rel="website-development">Website Development</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="website" rel="convert-website">Convert Website</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="website" rel="theme-development-customization">Theme Development & Customization</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="website" rel="fix-website-error">Fix Website Error</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="website" rel="speed-optimization">Speed Optimization</a>
                        </li>
                    </ul>
                    <h2>Virtual Assistant</h2>
                    <ul class="virtual-assistant">
                        <li>
                            <a class="active" href="javascript:void(0)" data-id="virtual-assistant" rel="all">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="virtual-assistant" rel="data-entry-online-offline">Data Entry Online Offline</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="virtual-assistant" rel="website-dev-and-maintenance">Website Dev and Maintenance</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="virtual-assistant" rel="digital-marketing">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="virtual-assistant" rel="seo">SEO (Search Engine Optimization)</a>
                        </li>
                    </ul>
                    <h2>Software</h2>
                    <ul class="software">
                        <li>
                            <a class="active" href="javascript:void(0)" data-id="software" rel="all">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="software" rel="sales-inventory-system">Sales & Inventory System</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="software" rel="accounting-erp-solution">Accounting ERP Solution</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="software" rel="education-management-system">Education Management System</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="software" rel="health-management-system">Health Management System</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="software" rel="customize-software">Customize Software</a>
                        </li>
                    </ul>
                    <h2>Mobile App</h2>
                    <ul class="mobile-app"> 
                        <li>
                            <a class="active" href="javascript:void(0)" data-id="mobile-app" rel="all">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="mobile-app" rel="android-app-development">Android App Development</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="mobile-app" rel="ios-app-development">IOS App Development</a>
                        </li>
                    </ul>
                    <h2>Graphic Design</h2> 
                    <ul class="graphic-design">
                        <li>
                            <a class="active" href="javascript:void(0)" data-id="graphic-design" rel="all">All</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="graphic-design" rel="motion-graphic">Motion Graphic</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="graphic-design" rel="ui-ux-design">UI UX Design</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="graphic-design" rel="branding-design">Branding Design</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="graphic-design" rel="print-design">Print Design</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-id="graphic-design" rel="publishing-design">Publishing Design</a>
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
                    @if(count($get_portfolio) > 0)
                        @foreach($get_portfolio as $value)
                            <div class="card {{ $value['id'] }} {{ $value['category'] }}">
                                <a href="{{ $value['url'] }}" target="_blank">
                                    <img @if(isset($value['class']) && !empty($value['class'])) class="{{ $value['class'] }}" @endif src="{{ asset('assets') }}/img/portfolio/{{ $value['photo'] }}" alt="{{ $value['name'] }}">
                                    <span>
                                        {{ $value['name'] }}
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
        
        
        $(".portfolio_wsz .col-1 ul.website li a").click(function(){
            $(".portfolio_wsz .col-1 ul.website li a").removeClass("active"); 
            get_portfolio($(this));
        })
        $(".portfolio_wsz .col-1 ul.virtual-assistant li a").click(function(){
            $(".portfolio_wsz .col-1 ul.virtual-assistant li a").removeClass("active"); 
            get_portfolio($(this));
        })
        $(".portfolio_wsz .col-1 ul.software li a").click(function(){
            $(".portfolio_wsz .col-1 ul.software li a").removeClass("active"); 
            get_portfolio($(this));
        })
        $(".portfolio_wsz .col-1 ul.mobile-app li a").click(function(){
            $(".portfolio_wsz .col-1 ul.mobile-app li a").removeClass("active"); 
            get_portfolio($(this));
        })
        $(".portfolio_wsz .col-1 ul.graphic-design li a").click(function(){
            $(".portfolio_wsz .col-1 ul.graphic-design li a").removeClass("active"); 
            get_portfolio($(this));
        })
    })
    
      
    
    function get_portfolio(current){
        current.addClass("active");
        var id = current.attr('data-id');
        var rel = current.attr('rel');
        
        
        $(".preloader").css("display", "block");
        $(".card-wrapper").css("opacity", 0);
        
        setTimeout(function(){
           $(".preloader").css("display", "none");
            $(".card-wrapper").css("opacity", 1);
        }, 500)
        
        if(rel == 'all'){
            $(".card-wrapper .card."+id).css('display', 'block');
        }else{
            $(".card-wrapper .card."+id).css('display', 'none');
            $(".card-wrapper .card."+id+"."+rel).css('display', 'block');
        }
    }
    
</script>

@endsection
