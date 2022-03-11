<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Home @endsection
@section('css')

@endsection


@section('content')

	<div class="motivate_section">
	    <div class="container-fluid">
	        <div class="row font-2">
	            <div class="col-1">
	                <h1 class="heading text-inline font-3">
	                    Assistance
	                    <span class="text-right">for us</span>
	                </h1>
	                <h1 class="heading font-3">
	                    <span>peace of mind</span>
	                    <span>for you!</span>
	                </h1>
	                
	                <video id="assistance_video" width="800" height="700" loop muted preload="none">
	                    <source src="assets/img/motivate.mp4" type="video/mp4">
	                    <source src="movie.ogg" type="video/ogg">
	                     Your browser does not support the video tag.
	                </video>
	            </div>
	            <div class="col-2">
	                
	                <div class="list-item">
	                    <span class="number">1</span>
	                    <div class="desc">
	                        <p>
	                            We are ready to be your umbrella. The umbrella will not prevent the rain, but it will assistance you to get out through rainfall.
	                        </p>
	                    </div>
	                </div>
	                <div class="list-item">
	                    <span class="number">2</span>
	                    <div class="desc">
	                        <p>
	                            Hiring a professional web design company to maintain your custom web design might help your business to thrive by saving you money over hiring an extra employee to do the work in-house.
	                        </p>
	                    </div>
	                </div>
	                <div class="list-item">
	                    <span class="number">3</span>
	                    <div class="desc">
	                        <p>
	                            Instead of one-way interruption, Web marketing is about delivering useful content at just the right moment that a buyer needs it.
	                        </p>
	                    </div>
	                </div>
	                <div class="list-item">
	                    <span class="number">4</span>
	                    <div class="desc">
	                        <p>
	                            We are here to do your data entry work in any aspect through online and offline.
	                        </p>
	                    </div>
	                </div>
	                <div class="list-item">
	                    <span class="number">5</span>
	                    <div class="desc">
	                        <p>
	                            We are always open to receiving clients who are ready, willing and able to work with us
	                        </p>
	                    </div>
	                </div>
	                <div class="list-item">
	                    <span class="number">6</span>
	                    <div class="desc">
	                        <p>
	                            SEO is not only about search engines but good SEO practices expand the user experience and usability of a website.
	                        </p>
	                    </div>
	                </div>
	                <div class="list-item">
	                    <span class="number">7</span>
	                    <div class="desc">
	                        <p>
	                            Using digital content either sponsored or free allows you to connect with consumers much more effectively than others. The strength of your online presence is now directly linked to the success of your business.
	                        </p>
	                    </div>
	                </div>
	                
	            </div>
	        </div>
	        
	    </div>
	</div>

	<div class="video_section font-2">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-1">
	                <h1 class="heading font-3">
	                    <span>Build Software</span>
	                    <span>Of your Thoughts</span>
	                </h1>
	                
	                
	                <div class="softwares">
	                    <div class="inner">
	                        <div class="media">
	                            <img src="assets/img/subpages/sales-inventory.png" alt="sales-inventory" /> 
	                        </div>
	                        <div class="content">
	                            Sales & Inventory <span>Software</span>
	                        </div>
	                        <div class="foot">
	                            <a target="_blank" class="read-more btn btn-1" href="https://wibsas.com/sales-and-inventory/"> See Demo </a>
	                        </div>
	                        <a target="_blank" class="over-link" href="https://wibsas.com/sales-and-inventory/"></a>
	                    </div>
	                    <div class="inner">
	                        <div class="media">
	                            <img src="assets/img/subpages/education.png" alt="education-management" /> 
	                        </div>
	                        <div class="content">
	                            Education Management <span>Software</span>
	                        </div>
	                        <div class="foot">
	                            <a target="_blank" class="read-more btn btn-1" href="https://wibsas.com/education-management-module/"> See Demo </a>
	                        </div>
	                        <a target="_blank" class="over-link" href="https://wibsas.com/education-management-module/"></a>
	                    </div>
	                    <div class="inner">
	                        <div class="media">
	                            <img src="assets/img/subpages/hospital-management.png" alt="hospital-management" /> 
	                        </div>
	                        <div class="content">
	                            Health Management <span>Software</span>
	                        </div>
	                        <div class="foot">
	                            <a target="_blank" class="read-more btn btn-1" href="https://wibsas.com/hospital-module"> See Demo </a>
	                        </div>
	                        <a target="_blank" class="over-link" href="https://wibsas.com/hospital-module/"></a>
	                    </div>
	                    <div class="inner">
	                        <div class="media">
	                            <img src="assets/img/subpages/accounting-erp.png" alt="erp" /> 
	                        </div>
	                        <div class="content">
	                            Accounting & HR <span>Solution</span>
	                        </div>
	                        <div class="foot">
	                            <a target="_blank" class="read-more btn btn-1" href="https://wibsas.com/hospital-module"> See Demo </a>
	                        </div>
	                        <a target="_blank" class="over-link" href="https://wibsas.com/hospital-module/"></a>
	                    </div>
	                </div>
	                
	            </div>
	            <div class="col-2">
	                <div class="video_wrapper">
	                    <video width="100%" id="software_video" height="100" style="height: 100%;" loop muted preload="none">
	                        <source src="assets/img/software-v.mkv" type="video/mp4">
	                        <source src="movie.ogg" type="video/ogg">
	                         Your browser does not support the video tag.
	                    </video>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="website_section font-2">
	    <div class="container-fluid">
	        
	        
	        <div class="row top_section">
	            <div class="col-1">
	                <img src="assets/img/cw.jpg" alt="cw" /> 
	                <ul class="website-list">
	                    <li class="active" data-desktop_src="assets/img/template/ecommerce-for-desktop.jpg" data-mobile_src="assets/img/template/ecommerce-for-phone.jpg" data-title="Online Store">
	                        <a href="javascript:void(0)">eCommerce <span><img  src="assets/img/curve-arrow.png" alt="next" /></span>
	                        </a>
	                    </li>
	                    <li data-desktop_src="assets/img/template/corporate-for-desktop.jpg" data-mobile_src="assets/img/template/corporate-for-phone.jpg" data-title="Corporate">
	                        <a href="javascript:void(0)">Corporate <span><img  src="assets/img/curve-arrow.png" alt="next" /> </span> </a>
	                    </li>
	                    <li data-desktop_src="assets/img/template/landing-for-desktop.jpg" data-mobile_src="assets/img/template/landing-for-phone.jpg" data-title="Landing Page">
	                        <a href="javascript:void(0)">Landing Page <span><img  src="assets/img/curve-arrow.png" alt="next" /></span></a>
	                    </li>
	                    <li data-desktop_src="assets/img/template/portfolio-for-desktop.jpg" data-mobile_src="assets/img/template/portfolio-for-phone.jpg" data-title="Portfolio">
	                        <a href="javascript:void(0)">Portfolio <span><img  src="assets/img/curve-arrow.png" alt="next" /></span></a>
	                    </li>
	                    <li data-desktop_src="assets/img/template/blog-for-desktop.jpg" data-mobile_src="assets/img/template/blog-for-phone.jpg" data-title="Blog">
	                        <a href="javascript:void(0)">Blog/News <span><img  src="assets/img/curve-arrow.png" alt="next" /></span></a>
	                    </li>
	                    <li data-desktop_src="assets/img/template/resturent-for-desktop.jpg" data-mobile_src="assets/img/template/resturent-for-phone.jpg" data-title="Restaurant">
	                        <a href="javascript:void(0)">Restaurant <span><img  src="assets/img/curve-arrow.png" alt="next" /></span></a>
	                    </li>
	                    <li data-desktop_src="assets/img/template/service-for-desktop.jpg" data-mobile_src="assets/img/template/service-for-phone.jpg" data-title="Services">
	                        <a href="javascript:void(0)">Services <span><img  src="assets/img/curve-arrow.png" alt="next" /></span></a>
	                    </li>
	                </ul>
	            </div>
	            <div class="col-2">
	                <h1 class="heading font-3">
	                    <span>Create Website </span>
	                    <span>Within Your</span>
	                    <span>Expected</span>
	                    <span>Timeframe</span>
	                </h1>
	            </div>
	        </div>
	        
	        <div class="row">
	            <div class="col">
	                <div class="box website_preview">
	                    <div class="quote_box">
	                        <div class="quote_inner_box basic_quote_form">
	                            <h2>Select Your Service</h2>
	                            <form action="" method="">
	                                <div class="form_group full_">
	                                    <select class="form_control" name="service_type" id="service_type">
	                                        <option value="">Service Type</option>
	                                        <?php
                                                $get_service = FunctionsController::get_service();
                                                foreach($get_service as $service) :
	                                        ?>  
	                                            <option value="{{ $service }}">{{ $service }}</option>
	                                        <?php endforeach; ?>
	                                        
	                                    </select>
	                                    <span class="err_service err_message"></span>
	                                </div>
	                                <div class="form_group half_">
	                                    <div>
	                                        <input type="text" class="form_control" name="name" id="name" placeholder="Your Name">
	                                        <span class="err_name err_message"></span>
	                                    </div>
	                                    <div>
	                                        <input type="text" class="form_control" name="email" id="email" placeholder="Your Email">
	                                        <span class="err_email err_message"></span>
	                                    </div>
	                                </div>
	                                <div class="form_group full_">
	                                    <input type="text" class="form_control" name="project_name" id="project_name" placeholder="Project Name">
	                                    <span class="err_project_name err_message"></span>
	                                </div>
	                                <div class="form_group full_">
	                                    <textarea class="form_control" name="project_details" id="project_details" placeholder="Project Details"></textarea>
	                                    <span class="err_project_details err_message"></span>
	                                </div>
	                                
	                                <div class="form_group full_">
                                        {!! app('captcha')->display() !!}
                                        <span class="err_captcha err_message"></span>
                                    </div>
	                                
	                                <div class="spacer-20"></div>
	                                
            						<div class="form_row_col1">
            						    <div class="form_col_inner">
                    						<div class="fmessage"></div>
                    					</div>
                					</div>
                					
	                                <div class="spacer-20"></div>
                    					
	                                <button type="button" class="quote-button btn btn-1" id="submit_basic_quote">Send a quote</a>
	                            </form>
	                        </div>
	                    </div>
	                    <div class="media">
	                        <div class="desktop">
	                            <div class="desktop-inner-wrapper">
	                                <div class="desktop-inner">
	                                    <img class="layout" src="assets/img/desktop.png"/>
	                                    <img class="template" src="assets/img/template/ecommerce-for-desktop.jpg"/>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-mobile">
	                            <div class="tab-mobile-inner-wrapper">
	                                <div class="tab-inner">
	                                    <img class="layout" src="assets/img/laptop.png"/>
	                                    <img class="template" src="assets/img/template/ecommerce-for-desktop.jpg"/>
	                                </div>
	                                <div class="mobile-inner">
	                                    <img class="layout" src="assets/img/mobile-icon.png"/>
	                                    <img class="template" src="assets/img/template/ecommerce-for-phone.jpg"/>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	            </div>
	        </div>
	    </div>
	</div><!-- End Section -->              
	                
	<div class="mobile_app_section font-2">
	    <div class="container-fluid">
	        
            <h1 class="show_on_mobile heading font-3 text-center" style="display: none">
                <span>Build Your</span>
                <span>Mobile App</span>
            </h1>
            
	        <div class="row">
	            
	            <div class="col-1">
	                <div class="apps">
	                    <a href="{{ url('/mobile-app/android-app-development') }}">
	                        <img src="assets/img/apple.png" alt="apple"/>
	                        <span>iOS</span>
	                    </a>
	                    <a href="{{ url('/mobile-app/ios-app-development') }}">
	                        <img src="assets/img/android.png" alt="android"/>
	                        <span>Android</span>
	                    </a>
	                    <a href="{{ url('/mobile-app/react-native') }}">
	                        <img src="assets/img/react.png" alt="react"/>
	                        <span>React-Native</span>
	                    </a>
	                </div>
	            </div>
	            <div class="col-2">
	                <h1 class="heading font-3 text-right">
                        <span>Build Your</span>
                        <span>Mobile App</span>
                    </h1>
                    <div class="soft-img">
                        <img src="{{ asset('assets') }}/img/gif/IOS.gif" alt="IOS">
                    </div>
	            </div>

	        </div>
	    </div>
	</div><!-- End Section -->
	
	<div class="mobile_app_section-for-mobile">
	    
	   <div class="container-fluid">
	        <div class="row">
	            <div class="col">
	                
	            </div>
	        </div>
	   </div>
	  
	</div><!-- End Section -->
	                           
	                
	<div class="testimonial_section font-2">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-1 font-3">
	                <h1 class="heading">
	                    <span>Our Ready</span>
	                    <span>satisfaction buyers</span>
	                </h1>
	            </div>
	            <div class="col-2">
	                
	                <div class="testimonial-slider">
	                    <div class="item">
	                        <img heigth="145px" width="145px" src="{{ asset('assets/img/client/klhurley.jpg') }}" alt="Dary1" />
	                      <h3>klhurley</h3>
	                      <ul class="review">
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                      </ul>
	                      <p>The seller went above and beyond for this project. The website kept going up and down and despite that, he was able to complete 90% of the work. I went ahead and accepted this delivery and he continued to work on it for me. Way beyond was expected. I'll work with him again the future for sure.</p>
	                    </div>
	                    <div class="item">
	                        <img heigth="145px" width="145px" src="{{ asset('assets/img/client/maxedwards127.jpg') }}" alt="maxedwards127" />
	                        
	                      <h3>maxedwards127</h3>
	                      <ul class="review">
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                      </ul>
	                      <p>I would highly recommend this seller for making landing pages on Wordpress and improving your Seo. This guy knows a lot and I am extremely satisfied with his service. Provides great rates on projects that need to be done which is another plus.
	                       <span style="opacity: 0;">------------------------------------------</span>
	                      </p>
	                    </div>
	                    <div class="item">
	                        <img heigth="145px" width="145px" src="{{ asset('assets/img/client/freddiep.jpg') }}" alt="freddiep" />
	                      <h3>freddiep</h3>
	                      <ul class="review">
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                      </ul>
	                      <p>First time working with this seller. He's very patient and works with you until it's to your satisfaction. I intend to work with him a lot. <span style="opacity: 0;">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
	                      </p>
	                    </div>
	                    <div class="item">
	                        <img heigth="145px" width="145px" src="{{ asset('assets/img/client/sataraa.jpg') }}" alt="sataraa" />
	                      <h3>Sataraa</h3>
	                      <ul class="review">
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                          <li>
	                              <img  src="{{ asset('assets/img/favourite.png') }}" alt="favourite"/>
	                          </li>
	                      </ul>
	                      <p>I was honored to work with Wsz_bd. As for the communication, it went very smooth, didn't encounter any problem whatsoever, very committed and respectful of the time line. I highly recommend working with this seller, he gets the job done as described, in time and with a great quality!</p>
	                    </div>
	                    
	                </div>
	                
	            </div>
	        </div>
	        
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

{!! NoCaptcha::renderJs() !!}


<!-- send information mail -->
<script>
    $(document).ready(function(){
        $(document).on("click", "#submit_basic_quote", function(){
            var service_type = $.trim($(".basic_quote_form #service_type").val());
            var name = $.trim($(".basic_quote_form #name").val());
            var email = $.trim($(".basic_quote_form #email").val());
            var project_name = $.trim($(".basic_quote_form #project_name").val());
            var project_details = $.trim($(".basic_quote_form #project_details").val());
            var recaptcha = $.trim($(".g-recaptcha-response").val());
            
            var form_preloader = $(".form_preloader").html();
            $(".basic_quote_form .fmessage").html(form_preloader);
            
            var error = 0;
            if(service_type == ''){
                $(".basic_quote_form .err_service ").text("Please select service type.");
                error = 1;
            }else{ $(".basic_quote_form .err_service ").text(""); }
            if(name == ''){
                $(".basic_quote_form .err_name").text("Please enter your name.");
                error = 1;
            }else{ $(".basic_quote_form .err_name ").text(""); }
            if(email == ''){
                $(".basic_quote_form .err_email").text("Please enter your email.");
                error = 1;
            }else{ $(".basic_quote_form .err_email ").text(""); }
            if(project_name == ''){
                $(".basic_quote_form .err_project_name").text("Please enter your project name.");
                error = 1;
            }else{ $(".basic_quote_form .err_project_name ").text(""); }
            if(project_details == ''){
                $(".basic_quote_form .err_project_details").text("Please enter your project details.");
                error = 1;
            }else{ $(".basic_quote_form .err_project_details ").text(""); }
            
            
            if(recaptcha == ''){
                $(".basic_quote_form .err_captcha").text("Captcha must not be empty.");
                error = 1;
            }else{
                $(".basic_quote_form .err_captcha").text('');
            }
            
            //email validation
            if(!IsEmail(email) && email != ''){
                $(".basic_quote_form .err_email").text("Please enter a valid email.");
                error = 1;
            }
            
            if(error == 1){
                $(".basic_quote_form .fmessage").html("<div class='err_message'>Something Wrong</div>");
            }else{
                
                $.ajax({
                    url: "{{ url('/send-basic-project-details/') }}",
                    method: 'POST',
                    dataType: 'html',
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        service_type : service_type,
                        name : name,
                        email : email,
                        project_name : project_name,
                        project_details : project_details,
                        recaptcha : recaptcha,
                    },
                    success: function(response){
                        if(response == "error"){
                            $(".basic_quote_form .fmessage").html("<div class='err_message'>Something Wrong.</div>");
                        }else{
                            $(".basic_quote_form .fmessage").html("<div class='scc_message'>Successfully Send your message.</div>");
                            
                            $('.basic_quote_form form').trigger("reset");
                            grecaptcha.reset();
                        }
                        
                    }
                })
                
                $(".basic_quote_form .err_message").text("");
            }
        })
        
    })
</script>



<script>
    $(document).ready(function(){
        var list_len = $('ul.website-list li').length;
        var list_count = 0;
        setInterval(function(){
            if(list_count == list_len){
                list_count = 0; 
            }
            
            $("ul.website-list li.active").removeClass("active");
            $('ul.website-list li').eq(list_count).addClass("active");
            var desktop_src = $('ul.website-list li').eq(list_count).attr("data-desktop_src");
            var mobile_src = $('ul.website-list li').eq(list_count).attr("data-mobile_src");
            $(".desktop .template").fadeOut(400, function(){
                //$(this).attr('src', desktop_src);
                $(".desktop-inner img.template").attr('src', desktop_src);
                $(".tab-inner img.template").attr('src', desktop_src);
                $(".mobile-inner img.template").attr('src', mobile_src);
                $(this).fadeIn('fast');
            });
           
           list_count += 1; 
        }, 2000);
        
        
        /* now play three times as fast just for the heck of it */
        document.getElementById('software_video').playbackRate = 3.0;
    
    })
    
    
    $(window).on('load', function() {
        $(window).resize(function(){
            
            //get scroller image height
            var _web_height = $(".scroller img.web-screen").height();
            var _mobile_height = $(".scroller img.mobile-screen").height();
            
            var web_per_height = (_web_height / 5) - 5;
            var mobile_per_height = (_mobile_height / 5) - 10;
            
            $(".scroller").get(0).style.setProperty("--img-sc-height", "-"+web_per_height+"px");
            $(".scroller.for_mobile_sc").get(0).style.setProperty("--mobile-img-sc-height", "-"+mobile_per_height+"px");
              
        });
        
        
         //get scroller image height
        var _web_height = $(".scroller img.web-screen").height();
        var _mobile_height = $(".scroller img.mobile-screen").height();
        var web_per_height = (_web_height / 5) - 5;
        var mobile_per_height = (_mobile_height / 5) - 10;
        
        $(".scroller").get(0).style.setProperty("--img-sc-height", "-"+web_per_height+"px");
        $(".scroller.for_mobile_sc").get(0).style.setProperty("--mobile-img-sc-height", "-"+mobile_per_height+"px");
        
        
        //set autoplay after page reload
        document.getElementById('software_video').play();
        document.getElementById('assistance_video').play();
        
    });
</script>

@endsection

