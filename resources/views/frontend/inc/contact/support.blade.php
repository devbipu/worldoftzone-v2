<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <h1 class="heading font-3">Support</h1>
                <img src="{{ asset('/assets/img/support-page/support-support.png') }}" alt="support-support"/>
                <h4>
                    <a href="mailto:support@worldsoftzone.com" style="color: #333">support@worldsoftzone.com</a>
                    </h4>
            </div>
            <div class="col-2">
                
                <div class="in-content">
                    
                    <div class="form_wraper">
                		<div class="formInner">
                			<div>
                				<form action="" class="quoatForm" method="post">
                					<div class="personal_info support_info support">
                						<div class="form_row full">
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="service_name">Select One<span class="required">*</span></label>
                									<select name="service_name" id="service_name">
                										  <option value="">Select your problem</option>
                										  <?php
                										    $get_service = FunctionsController::get_service();
                										    foreach($get_service as $service) :
                										  ?>
                    									        <option value="<?php echo $service; ?>"><?php echo $service; ?></option>
                    									   <?php endforeach; ?>
                									</select>
                									<span class="err_service err_message"></span>
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
                						<div class="form_row">
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="name">Name<span class="required">*</span></label>
                									<input type="text" name="cName" id="name" placeholder="Enter your full name">
                								    <span class="err_name err_message"></span>
                								</div>
                							</div>
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="email">Email<span class="required">*</span></label>
                									<input type="text" name="cEmail" id="email" placeholder="Enter your email address">
                								    <span class="err_email err_message"></span>
                								</div>
                							</div>
                						</div>
                						
                						<div class="form_row full">
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="contact">Contact</label>
                									<input type="text" name="cContact" id="contact" placeholder="Enter your contact number">
                								    <span class="err_contact err_message"></span>
                								</div>
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
                								<button class="btn btn-1" type="button" id="submit_support">
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