@extends('frontend.layout')

@section('title') Why Choose Us @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/whyChooseUs.css">
<style>
    
    .whyChooseUs {
        background: url({{ asset('assets/img/subpages/why-choose-us-bg.jpg') }});
        min-height: 100vh;
        background-size: cover;
    }
    
</style>

@endsection


@section('content')

<div class="whyChooseUs">
    <div class="container-fluid">
       
       <div class="row">
           <div class="col-1">
               <div class="marque-1">
                   <marquee width="100%" direction="right" height="30px" scrollamount="9">
                        We'll Measure Your Success
                    </marquee>
               </div>
               <div class="marque-2">
                   <marquee width="100%" direction="right" height="30px" scrollamount="7">
                        We wanted to well-known  for our Excellent Customer Support
                    </marquee>
               </div>
               <div class="marque-3">
                   <marquee width="100%" direction="right" height="30px" scrollamount="10">
                        Maintain Quality & Commitment and Help to Your Business Growth
                    </marquee>
               </div>
               <div class="marque-4">
                   <marquee width="100%" direction="right" height="30px" scrollamount="9">
                        We Make your Profit our Priority
                    </marquee>
               </div>
               <div class="marque-5">
                   <marquee width="100%" direction="right" height="30px" scrollamount="7">
                        We Offer Continuing Assistance
                    </marquee>
               </div>
           </div>
           
           <div class="col-2">
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            We are eager to focus on your project and want to satisfy you. We're not top company but wanted recognised as one of the top web design and development companies in the area.
                        </p>
                    </div>
                </div>
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            We love doing what we do, and you'll enjoy working with us.  Our teams are small and responsive but we believe when you work with us you'll feel like part of the family.
                        </p>
                    </div>
                </div>
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            We'll keep you updated with the improvement of your site. We're a small team, so you'll soon get to know everyone working on your project, but we think big. We'll earn your trust and make the route stress-free.
                        </p>
                    </div>
                </div>
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            We enjoy multifaceted web development projects and complicated third party software integration. You'll find us authentic and dependable.
                        </p>
                    </div>
                </div>
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            The success of your project is our priority. We're not happy unless your happiness. 
                        </p>
                    </div>
                </div>
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            We'll guide you through Google analytics, so you can measure how effective your web site is, or we'll create some custom reports for you so you can track what's important to you.
                        </p>
                    </div>
                </div>
                <div class="list-item">
                    <span class="indicator">
                        <img src="{{ asset('/assets/img/right-arrow-b.png') }}" alt="right-arrow" />
                    </span>
                    <div class="desc">
                        <p>
                            We are available 24/7 on our office contact numbers, live chat and social networks.
                        </p>
                    </div>
                </div>
                
            </div>
       </div>
       
       
    </div>
</div>


@endsection


@section('js')

    <script>
        /*$(document).ready(function(){
            setInterval(function(){
                $(".indicator img").addClass("active");
            }, 300, function(){
                $(".indicator img.active").removeClass("active");
            })
        })*/
    </script>

@endsection
