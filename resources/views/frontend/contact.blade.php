@extends('frontend.layout')

@section('title') Contact @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/website-development.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/contact.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/form.css">
<style>
    .support_page_header {
        background: url({{ asset('assets') }}/img/support-page.png);
        background-position: bottom center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .support_page_footer{
        background: url({{ asset('assets') }}/img/support-page-footer-top-banner.png);
        background-position: top center;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 139px;
    }
    
</style>

@endsection

@section('content')


<div class="web_single_page">
    
    <div class="body_overlay"></div>
    
    <div class="support_page_header">
        <h1 class="heading font-3">Customer <span>Support</span></h1>
    </div>
    
    <div class='support_body container-fluid'>
        <div class='row'>
            <div class="col-1 col">
                <div class="contact_item" rel="information">
                    <div class="media text-center">
                        <img src="{{ asset('assets') }}/img/support-page/support-information.png">
                    </div>
                    <h2 class="text-center">Information</h2>
                </div>
            </div>
            <div class="col-2 col">
                <div class="contact_item" rel="support">
                    <div class="media text-center">
                        <img src="{{ asset('assets') }}/img/support-page/support-support.png">
                    </div>
                    <h2 class="text-center">Support</h2>
                </div>
            </div>
            <div class="col-3 col">
                <div class="contact_item" rel="service">
                    <div class="media text-center">
                        <img src="{{ asset('assets') }}/img/support-page/support-services.png">
                    </div>
                    <h2 class="text-center">Service</h2>
                </div>
            </div>
            <div class="col-4 col">
                <div class="contact_item" rel="faq">
                    <div class="media text-center">
                        <img src="{{ asset('assets') }}/img/support-page/support-feedback.png">
                    </div>
                    <h2 class="text-center">FAQ</h2>
                </div>
            </div>
            <div class="col-5 col">
                <div class="contact_item" rel="contact">
                    <div class="media text-center">
                        <img src="{{ asset('assets') }}/img/support-page/support-contact.png">
                    </div>
                    <h2 class="text-center">Contact</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="support_page_footer"></div>
</div>


<div id="details" style="display: none;">
    <span class="close_popup">
        <img src="{{ asset('assets/img/close.png') }}" alt="close">
    </span>
    <div id="content">
       <div class="preloader" style="top: 60px">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                  <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                </circle>
            </svg>
        </div>
    </div>
</div>

<div class="preloader_wrapper" style="display: none; ">
    <div class="preloader" style="top: 60px">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
              <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
            </circle>
        </svg>
    </div>
</div>

@endsection


<div class="form_preloader" style="display: none; ">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="#ddd" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
          <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
        </circle>
    </svg>
</div>


@section('js')

<!-- send information mail -->
<script>
    $(document).ready(function(){
        $(document).on("click", "#submit_information", function(){
            var name = $.trim($(".information #name").val());
            var email = $.trim($(".information #email").val());
            var country = $.trim($(".information #country_name").val());
            var message = $.trim($(".information #message").val());
            var recaptcha = $.trim($(".g-recaptcha-response").val());
            
            var form_preloader = $(".form_preloader").html();
            $(".information .fmessage").html(form_preloader);
            
            var error = 0;
            if(name == ''){
                $(".information .err_name").text("Please enter your name.");
                error = 1;
            }else{
                $(".information .err_name").text("");
            }
            if(email == ''){
                $(".information .err_email").text("Please enter your email.");
                error = 1;
            }else{
                $(".information .err_email").text("");
            }
            
            if(recaptcha == ''){
                $(".information .err_captcha").text("Captcha must not be empty.");
                error = 1;
            }else{
                $(".information .err_captcha").text("");
            }
            
            if(country == ''){
                $(".information .err_country").text("Please enter your country.");
                error = 1;
            }else{
                $(".information .err_country").text();
            }
            
            //email validation
            if(!IsEmail(email) && email != ''){
                $(".information .err_email").text("Please enter a valid email.");
                error = 1;
            }
            
            if(error == 1){
                $(".information .fmessage").html("<div class='err_message'>Something Wrong</div>");
            }else{
                
                $.ajax({
                    url: "{{ url('/send-info/') }}",
                    method: 'POST',
                    dataType: 'html',
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        name : name,
                        email : email,
                        country : country,
                        message : message,
                        recaptcha : recaptcha,
                    },
                    success: function(response){
                        if(response == "error"){
                            $(".information .fmessage").html("<div class='err_message'>Something Wrong.</div>");
                        }else{
                            $(".information .fmessage").html("<div class='scc_message'>Successfully Send your message.</div>");
                            
                            $('.form_wraper .formInner form').trigger("reset");
                            grecaptcha.reset();
                        }
                    }
                })
                
                $(".information .err_message").text("");
            }
        })
        
    })
</script>

<!-- send support mail -->
<script>
    $(document).ready(function(){
        $(document).on("click", "#submit_support", function(){
            var service_name = $.trim($(".support #service_name").val());
            var message = $.trim($(".support #message").val());
            var name = $.trim($(".support #name").val());
            var email = $.trim($(".support #email").val());
            var contact = $.trim($(".support #contact").val());
            var recaptcha = $.trim($(".g-recaptcha-response").val());
            
            var form_preloader = $(".form_preloader").html();
            $(".support .fmessage").html(form_preloader);
            
            var error = 0;
            if(service_name == ''){
                $(".support .err_service").text("Please enter your service name.");
                error = 1;
            }else{
               $(".support .err_service").text(""); 
            }
            
            if(name == ''){
                $(".support .err_name").text("Please enter your name.");
                error = 1;
            }else{
               $(".support .err_name").text(""); 
            }
            
            if(email == ''){
                $(".support .err_email").text("Please enter your email.");
                error = 1;
            }else{
               $(".support .err_email").text(""); 
            }
            
            
            if(recaptcha == ''){
                $(".support .err_captcha").text("Captcha must not be empty.");
                error = 1;
            }else{
                $(".support .err_captcha").text("");
            }
            
            //email validation
            if(!IsEmail(email) && email != ''){
                $(".support .err_email").text("Please enter a valid email.");
                error = 1;
            }
            
            if(error == 1){
                $(".support .fmessage").html("<div class='err_message'>Something Wrong</div>");
            }else{
                
                $.ajax({
                    url: "{{ url('/send-support/') }}",
                    method: 'POST',
                    dataType: 'html',
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        service_name : service_name,
                        message : message,
                        name : name,
                        email : email,
                        contact : contact,
                        recaptcha : recaptcha,
                    },
                    success: function(response){
                        if(response == "error"){
                            $(".support .fmessage").html("<div class='err_message'>Something Wrong.</div>");
                        }else{
                            $(".support .fmessage").html("<div class='scc_message'>Successfully Send your message.</div>");
                            $('.form_wraper .formInner form').trigger("reset");
                            grecaptcha.reset();
                        }
                    }
                })
                
                $(".support .err_message").text("");
            }
        })
        
    })
</script>


<!-- send contact mail -->
<script>
    $(document).ready(function(){
        $(document).on("click", "#submit_contact", function(){
            var name = $.trim($(".contact #name").val());
            var email = $.trim($(".contact #email").val());
            var subject = $.trim($(".contact #subject").val());
            var message = $.trim($(".contact #message").val());
            var recaptcha = $.trim($(".g-recaptcha-response").val());
            
            var form_preloader = $(".form_preloader").html();
            $(".contact .fmessage").html(form_preloader);
            
            var error = 0;
            if(name == ''){
                $(".contact .err_name").text("Please enter your name.");
                error = 1;
            }else{ $(".contact .err_name").text(""); }
            if(email == ''){
                $(".contact .err_email").text("Please enter your email.");
                error = 1;
            }else{ $(".contact .err_email").text(""); }
            if(subject == ''){
                $(".contact .err_subject").text("Please enter your subject.");
                error = 1;
            }else{ $(".contact .err_subject").text(""); }
            if(message == ''){
                $(".contact .err_details").text("Please enter your message.");
                error = 1;
            }else{ $(".contact .err_details").text(""); }
            
            
            if(recaptcha == ''){
                $(".contact .err_captcha").text("Captcha must not be empty.");
                error = 1;
            }else{
                $(".contact .err_captcha").text("");
            }
            
            //email validation
            if(!IsEmail(email) && email != ''){
                $(".contact .err_email").text("Please enter a valid email.");
                error = 1;
            }
            
            if(error == 1){
                $(".contact .fmessage").html("<div class='err_message'>Something Wrong</div>");
            }else{
                
                $.ajax({
                    url: "{{ url('/send-contact/') }}",
                    method: 'POST',
                    dataType: 'html',
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        name : name,
                        email : email,
                        subject : subject,
                        message : message,
                        recaptcha : recaptcha,
                    },
                    success: function(response){
                        if(response == "error"){
                            $(".contact .fmessage").html("<div class='err_message'>Something Wrong.</div>");
                        }else{
                            $(".contact .fmessage").html("<div class='scc_message'>Successfully Send your message.</div>");
                            $('.form_wraper .formInner form').trigger("reset");
                            grecaptcha.reset();
                        }
                    }
                })
                
                $(".contact .err_message").text("");
            }
        })
        
    })
</script>



<script>
    $(document).ready(function(){
        $(".contact_item").click(function(e){
            e.preventDefault();
            var rel = $(this).attr('rel');
            $(".body_overlay").addClass("active");
            $("#details").fadeIn("fast");
            $.ajax({
                url: "{{ url('/contact/details') }}/"+rel,
                method: 'get',
                dataType: 'html',
                success: function(response){
                    $("#details #content").html(response);
                }
            })
            
        })
        
        $(document).on("click", ".close_popup", function(){
            $(".body_overlay").removeClass("active");
            $("#details").fadeOut("fast", function(){
                var pr = $(".preloader_wrapper").html();
                $("#details #content").html(pr);
            }); 
        })
    })
</script>

@endsection
