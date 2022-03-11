<div class="service_details contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <h1 class="heading font-3">Contact</h1>
                <img src="{{ asset('/assets/img/support-page/support-contact.png') }}" alt="support-contact"/>
                <div class="wsz_offices">
                    <div class="office">
                        <ul>
                            
                            <li>
                                <span class="icon">
                                    <img src="{{ asset('/assets/img/location.png') }}" alt="location" />
                                </span>
                                <span class="content">
                                    <div class="item">
                                        <span class="title">Dhaka Office</span>
                                        <span class="text">Savar, Dhaka 7100</span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Phone</span>
                                        <span class="text"><a href="tel:01841-329494">01841-329495</a></span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Email</span>
                                        <span class="text"><a href="mailto:contact@worldsoftzone.com">contact@worldsoftzone.com</a></span>
                                    </div>
                                </span>
                            </li><!-- End Item -->
                            <li>
                                <span class="icon">
                                    <img src="{{ asset('/assets/img/location.png') }}" alt="location" />
                                </span>
                                <span class="content">
                                    <div class="item">
                                        <span class="title">Meherpur Office</span>
                                        <span class="text">Parents Home, Meherpur 7100</span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Phone</span>
                                        <span class="text"><a href="tel:01841-329494">01841-329494</a></span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Email</span>
                                        <span class="text"><a href="mailto:contact@worldsoftzone.com">contact@worldsoftzone.com</a></span>
                                    </div>
                                </span>
                            </li><!-- End Item -->
                            <li>
                                <span class="icon">
                                    <img src="{{ asset('/assets/img/location.png') }}" alt="location" />
                                </span>
                                <span class="content">
                                    <div class="item">
                                        <span class="title">USA Office</span>
                                        <span>Denton, TX 76210, USA</span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Phone</span>
                                        <span class="text"><a href="tel:+1 (260) 297-0654">+1 (260) 297-0654</a></span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Email</span>
                                        <span class="text"><a href="mailto:contact@worldsoftzone.com">contact@worldsoftzone.com</a></span>
                                    </div>
                                </span>
                            </li><!-- End Item -->
                            <li>
                                <span class="icon">
                                    <img src="{{ asset('/assets/img/location.png') }}" alt="location" />
                                </span>
                                <span class="content">
                                    <div class="item">
                                        <span class="title">Germany Office</span>
                                        <span>Konsul Francke Strasse 7, 21075 Hamburg, Germany</span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Phone</span>
                                        <span class="text"><a href="tel:+4917632383640">+4917632383640</a></span>
                                    </div>
                                    <div class="item">
                                        <span class="title">Email</span>
                                        <span class="text"><a href="mailto:contact@worldsoftzone.com">contact@worldsoftzone.com</a></span>
                                    </div>
                                </span>
                            </li><!-- End Item -->
                            
                            
                            
                        </ul>
                    </div>
                </div><!--end wsz office-->
            </div>
            <div class="col-2">
                
                <div class="in-content">
                    <div class="form_wraper">
                		<div class="formInner">
                			<div>
                				<form action="" class="quoatForm">
                					<div class="personal_info for_more_info">
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
                						<div class="form_row full">
                							<div class="form_col">
                								<div class="form_col_inner">
                									<label for="#subject">Subject<span class="required">*</span></label>
                									<input type="text" name="cSubject" id="subject" placeholder="Enter your Subject">
                								    <span class="err_subject err_message"></span>
                								</div>
                							</div>
                						</div>
                						<div class="form_row_col1">
                							<div class="form_col_inner">
                								<label for="#message">Message <span class="required">*</span></label>
                								<textarea rows="4" id="message" required></textarea>
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
                								<button class="btn btn-1" type="button" id="submit_contact">
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