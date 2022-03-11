<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Send your Quote @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/form.css') }}">
<style>
    .form_wraper {
        margin-top: 0;
    }
    
    .personal_info::before {
        content: "Project Details";
    }
</style>

@endsection

@section('content')

    <div class="quote_form_wrapper">
        <div class="container-fluid">
            <!--<div class="support_page_header text-center">
                <h1 class="heading font-3">Send your Quote</h1>
            </div>-->
            
            <div class="form_wraper">
    		<div class="formInner">
    			<div>
    				<form action="" class="quoatForm information">
    					<div class="personal_info">
    						<div class="form_row">
    							<div class="form_col">
    								<div class="form_col_inner">
    									<label for="#name">Name<span class="required">*</span></label>
    									<input type="text" name="cName" id="name" placeholder="Enter your full name">
    									<span class="err_name err_message"></span>
    								</div>
    							</div>
    							<div class="form_col">
    								<div class="form_col_inner">
    									<label for="#email">Email<span class="required">*</span></label>
    									<input type="text" name="cEmail" id="email" placeholder="Enter your email address">
    									<span class="err_email err_message"></span>
    								</div>
    							</div>
    						</div>
    						<div class="form_row">
    							<div class="form_col">
    								<div class="form_col_inner">
    									<label for="#contact">Contact(skype, whatsapp)</label>
    									<input type="text" name="ccontact" id="contact" placeholder="Enter your contact info">
    									<span class="err_contact err_message"></span>
    								</div>
    							</div>
    							<div class="form_col">
    								<div class="form_col_inner">
    									<label for="#time">Country<span class="required">*</span></label>
    									<input list="country" name="country" id="country_name" />
    								    <datalist id="country">
    								        <?php
    									        $get_countries = FunctionsController::country_list();
    									    ?>
    									    @foreach($get_countries as $country)
                                                <option value="{{ $country['name'] }}" />
                                            @endforeach
    								    </datalist>
    								    <span class="err_country err_message"></span>
    								</div>
    							</div>
    						</div>
    						
    						<div class="form_row">
    							<div class="form_col">
    								<div class="form_col_inner">
    									<label for="service_type">What's you need<span class="required">*</span></label>
    									<select name="service_type" id="service_type">
    										<option value="">Select what you need</option>
    									    <?php
    									        $get_services = FunctionsController::get_service();
    									    ?>
    									    @foreach($get_services as $key => $service)
                                                <option <?php echo (isset($_GET['service']) && $_GET['service'] == $key) ? 'selected' : '' ?> value="{{ $key }}">{{ $service }}</option>
                                            @endforeach
    									</select>
    									
    									<span class="err_service_type err_message"></span>
    								</div>
    							</div>
    							
    							<div class="form_col">
    								<div class="form_col_inner">
    									<label for="project_name">Project Title<span class="required">*</span></label>
    									<input type="text" name="project_name" id="project_name" required>
    									<span class="err_project_name err_message"></span>
    								</div>
    							</div>
    						</div>
    						
    						
    						<div class="form_attachment">
    							<div class="form_col_inner">
    								<label for="project_description">Porject Description <span class="required">*</span></label>
    								<textarea rows="4" id="project_description" required></textarea>
    									<span class="err_project_description err_message"></span>
    							</div>
    						</div>
    						
    						
    						<div class="form_attachment">
    							<div class="form_col_inner">
    								<label for="#file">Upload your file<span class="required">*</span></p>
    								<div class="attachment">
    									<input type="file" name="attachment" id="attachment">
    									<span class="err_attachment err_message"></span>
    								</div>
    							</div>
    						</div>
    						
        					<div class="form_row full">
								<div class="form_col_inner">
                                    {!! app('captcha')->display() !!}
                                    <span class="err_captcha err_message"></span>
                                </div>
                            </div>
    						
    						<div class="form_col">
    							<div class="form_col_inner">
    						        <div class="fmessage"></div>
    						    </div>
    						</div>
    						
    						
    						<div class="spacer-20"></div>
    						
    						
    						<div class="form_attachment">
    							<div class="form_col_inner">
    								<button class="btn btn-1" type="button" id="submit_adv_quote">
    						            Submit Your Quote
    						        </button>
    							</div>
    						</div>
    						
    					</div>
    					
    				</form>
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
        $(document).on("click", "#submit_adv_quote", function(){
            var name = $.trim($(".information #name").val());
            var email = $.trim($(".information #email").val());
            var contact = $.trim($(".information #contact").val());
            var country = $.trim($(".information #country_name").val());
            var service_type = $.trim($(".information #service_type").val());
            var project_name = $.trim($(".information #project_name").val());
            var project_description = $.trim($(".information #project_description").val());
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
            
            if(country == ''){
                $(".information .err_country").text("Please enter your country.");
                error = 1;
            }else{
                $(".information .err_country").text("");
            }
            
            if(service_type == ''){
                $(".information .err_service_type").text("Please select service type.");
                error = 1;
            }else{
                $(".information .err_service_type").text("");
            }
            
            if(project_name == ''){
                $(".information .err_project_name").text("Please enter your service name.");
                error = 1;
            }else{
                $(".information .err_project_name").text("");
            }
            
            
            if(project_description == ''){
                $(".information .err_project_description").text("Please enter your project description.");
                error = 1;
            }else{
                $(".information .err_project_description").text("");
            }
            
            if(recaptcha == ''){
                $(".contact .err_captcha").text("Captcha must not be empty.");
                error = 1;
            }else{
                $(".contact .err_captcha").text("");
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
                    url: "{{ url('/send-adv-project-details') }}",
                    method: 'POST',
                    dataType: 'html',
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        name : name,
                        email: email,
                        contact: contact,
                        country: country,
                        service_type: service_type,
                        project_name: project_name,
                        project_description: project_description,
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

@endsection
