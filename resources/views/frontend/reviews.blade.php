<?php error_reporting(0); ?>
@extends('frontend.layout')

@section('css')
<style>
    .portfolio_wsz .card-wrapper .card {
        margin: 0;
        width: 100%;
        padding: 30px;
    }
    .portfolio_wsz .card-wrapper .content {
        padding-right: 15%;
    }
    .portfolio_wsz .card-wrapper .content, .portfolio_wsz .card-wrapper .content p {
        color: #000 !important;
        text-align: left;
    }
    .portfolio_wsz .card-wrapper .card h1 {
        text-align: left;
    }
    .portfolio_wsz .card-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }
    .portfolio_wsz .card-wrapper .card {
        padding: 20px;
        margin: 0 auto 5px auto;
    }
    .portfolio_wsz .card-wrapper .card h1 {
        font-size: 24px;
    }
    
    ul.review {
        text-align: left;
        padding: 4px 0 10px;
    }
    ul.review li {
        display: inline;
    }
    .portfolio_wsz .card-wrapper .card ul.review li img,
    .portfolio_wsz ul.review li img {
        max-width: 16px;
        padding: 0;
        height: auto;
    }
    
    
    .portfolio_wsz > .container-fluid > .row > .col-1 form {
        background-color: #fff;
        padding: 15px;
        border-radius: 10px;
    }
    .portfolio_wsz > .container-fluid > .row > .col-1 form .form_control {
        width: 100%;
        padding: 12px;
        border: 1px solid #333;
        border-radius: 10px;
    }
    .portfolio_wsz > .container-fluid > .row > .col-1 form .form_group ul.review {
        margin: 0;
        padding: 6px 0 7px;
    }
    .portfolio_wsz > .container-fluid > .row > .col-1 form .form_group ul.review li img {
        cursor: pointer;
        filter: brightness(0);
    }
    .portfolio_wsz > .container-fluid > .row > .col-1 form .form_group ul.review li img:hover, .portfolio_wsz > .container-fluid > .row > .col-1 form .form_group ul.review li img.active {
        filter: brightness(1);
    }
    
    button#submit_review {
        padding: 10px 14px;
        font-size: 17px;
        background-color: #000;
        border: 0;
        color: #fff;
        border-radius: 10px;
        margin-top: 10px;
        cursor: pointer;
    }


</style>
@endsection


@section('content')


<div class="service-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="heading font-3 text-center">
                    <span>Client Reviews</span>
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="portfolio_wsz review">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <form method="post" class="review_form">
                    @csrf
                    
                    <div class="form_group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" class="form_control" placeholder="Enter your Name" />
                        <span class="err_name err_message"></span>
                    </div>
                    <div class="form_group">
                        <input type="hidden" name="rate" class="user_rate" id="rate" value="3" />
                        <ul class="review">
                            <li>
                                <img class="active" rel="1" src="{{ asset('/assets/img/favourite.png') }}" alt="favourite">
                            </li>
                            <li>
                                <img class="active" rel="2" src="{{ asset('/assets/img/favourite.png') }}" alt="favourite">
                            </li>
                            <li>
                                <img class="active" rel="3" src="{{ asset('/assets/img/favourite.png') }}" alt="favourite">
                            </li>
                            <li>
                                <img rel="4" src="{{ asset('/assets/img/favourite.png') }}" alt="favourite">
                            </li>
                            <li>
                                <img rel="5" src="{{ asset('/assets/img/favourite.png') }}" alt="favourite">
                            </li>
        	            </ul>
        	            <span class="err_rate err_message"></span>
                    </div>
                    <div class="form_group">
                        <label for="review">Your Review *</label>
                        <textarea id="review" name="review" class="form_control" rows="4"></textarea>
                        <span class="err_review err_message"></span>
                    </div>
                    
                    
					<div class="form_group">
                        {!! app('captcha')->display() !!}
                        <span class="err_captcha err_message"></span>
                    </div>
                    
                    <div class="form_group">
    					<div class="fmessage"></div>
					</div>
					
                    					
                    <div class="form_group">
                        <button type="button" id="submit_review" class="btn_review">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-2">
                <div class="card-wrapper">
                    @if($get_data->count() > 0)
                        @foreach($get_data as $data)
                            <div class="card">
                                <h1>
                                    {{ $data->client_name }}
                                </h1>
                                <div class="review">
                                    <ul class="review">
                                        @for($i = 1; $i <= number_format($data->rate) ; $i++)
            	                          <li>
            	                              <img src="{{ asset('/assets/img/favourite.png') }}" alt="favourite">
            	                          </li>
        	                          @endfor
        	                      </ul>
                                </div>
                                <div class="content">
                                    <?php echo $data->review_description ?>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form_preloader" style="display: none; ">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
          <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
        </circle>
    </svg>
</div>


@endsection


@section('js')

{!! NoCaptcha::renderJs() !!}

<!-- send information mail -->
<script>
    $(document).ready(function(){
        $(document).on("click", "#submit_review", function(){
            var name = $.trim($(".review_form #name").val());
            var rate = $.trim($(".review_form #rate").val());
            var review = $.trim($(".review_form #review").val());
            var recaptcha = $.trim($(".g-recaptcha-response").val());
            
            var form_preloader = $(".form_preloader").html();
            $(".review_form .fmessage").html(form_preloader);
            
            var error = 0;
            if(name == ''){
                $(".review_form .err_name").text("Please enter your name.");
                error = 1;
            }else{
                $(".review_form .err_name").text('');
            }
            if(rate == ''){
                $(".review_form .err_rate").text("Please enter your rate.");
                error = 1;
            }else{
                $(".review_form .err_rate").text('');
            }
            if(recaptcha == ''){
                $(".review_form .err_captcha").text("Captcha must not be empty.");
                error = 1;
            }else{
                $(".review_form .err_captcha").text('');
            }
            
            if(review == ''){
                $(".review_form .err_review").text("Please enter your review.");
                error = 1;
            }else{
                $(".review_form .err_review").text('');
            }
            
            if(error == 1){
                $(".review_form .fmessage").html("<div class='err_message'>Something Wrong</div>");
            }else{
                
                $.ajax({
                    url: "{{ url('/send-review/') }}",
                    method: 'POST',
                    dataType: 'html',
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        name : name,
                        rate : rate,
                        review : review,
                        recaptcha : recaptcha,
                    },
                    success: function(response){
                        if(response == "error"){
                            $(".review_form .fmessage").html("<div class='err_message'>Something Wrong.</div>");
                        }else{
                            $(".review_form .fmessage").html("<div class='scc_message'>Successfully Send your message.</div>");
                            
                            $('.review_form').trigger("reset");
                            grecaptcha.reset();
                        }
                    }
                })
                
                $(".review_form .err_message").text("");
            }
        })
        
    })
</script>

<script>
    $(document).ready(function(){
        $(".form_group ul.review li img").click(function(){
            var rel = $(this).attr("rel");
            $(".user_rate").attr("value", rel);
            $(".form_group ul.review li img").removeClass("active");
            
            $(this).parent().prevAll().find('img').addClass('active');
            $(this).addClass('active');
            
        })
    })
</script>

@endsection
