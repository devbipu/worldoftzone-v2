<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details information">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <h1 class="heading font-3">Information</h1>
                <img src="{{ asset('/assets/img/support-page/support-information.png') }}" alt="support-information"/>
                <h4><a href="mailto:info@worldsoftzone.com" style="color: #333">info@worldsoftzone.com</a></h4>
            </div>
            <div class="col-2">
                
                <div class="in-content">
                   <p>WorldSoftZone is a concern of Rashida Group. We create a consulting skill on how to use modern technologies in a set of industries. By using a high-level overview, flexible website development, software development management methodologies and certified project managers, we carefully track every step of our projects to deliver on time and budget.
                    </p>
                    <p>
                        Our mission is to be a real partner to modernizers by developing great products together. We help our clients accomplish their product and business goals by bringing passion for technology, understanding for the user and extensive experience in product development.
                    </p>
                    
                    
                    <div class="form_wraper">
                		<div class="formInner">
                			<div>
                				<form action="POST" class="quoatForm information">
                					<div class="personal_info for_more_info">
                						<div class="form_row">
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="#name">Name<span class="required">*</span></label>
                									<input type="text" name="cName" id="name" placeholder="Enter your full name" required>
                								    <span class="err_name err_message"></span>
                								</div>
                							</div>
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="#email">Email<span class="required">*</span></label>
                									<input type="text" name="cEmail" id="email" placeholder="Enter your email address" required>
                								    <span class="err_email err_message"></span>
                								</div>
                							</div>
                						</div>
                						<div class="form_row full">
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="country">Country<span class="required">*</span></label>
                									<input list="country" name="country" id="country_name" required/>
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
                						<div class="form_row_col1">
                							<div class="form_col_inner">
                								<label for="message">Message</label>
                								<textarea rows="4" id="message"></textarea>
                								<span class="err_details err_message"></span>
                							</div>
                						</div>
                						
                    					<div class="form_row full">
                							<div class="form_col">
                								<div class="form_col_inner">
                                                    {!! app('captcha')->display() !!}
                                                    <span class="err_captcha err_message"></span>
                                                </div>
                                            </div>
                                        </div>
                						
                						<div class="form_row_col1">
                						    <div class="form_col_inner">
                        						<div class="fmessage"></div>
                        					</div>
                    					</div>
                						
                						<div class="spacer-20"></div>
                						<div class="form_row_col1">
                							<div class="form_col_inner">
                								<button class="btn btn-1" type="button" id="submit_information">
                						            Send Your Message
                						        </button>
                							</div>
                						</div>
                					</div>
                				</form>
                			</div>
                		</div>
                	</div><!--end form wrapper-->
                	
                    
                </div>
                
            </div>
        </div>
    </div>
</div>



{!! NoCaptcha::renderJs() !!}
