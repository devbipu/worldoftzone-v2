<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" />
    
    {!! SEO::generate() !!}
    
    
    <!-- SlickSlider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/plugin/SlickSlider/slick.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/global.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/slider.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/services.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/subpagesstyle.css">

    @yield('css')

    <style>
        @media (min-width: 768px) {
            .header_slider {
                background: #baf0fa url({{ asset('assets') }}/img/slider-bg.jpg) no-repeat;
                background-size: cover;
                background-position: center center;
            }
        }

        @media (max-width: 767px) {
            .header_slider {
                /*background: #baf0fa url({{ asset('assets') }}/img/mobile-bg.jpg) no-repeat;*/
                background-size: cover;
            }
        }

        .web_services {
            background: #fff url({{ asset('assets') }}/img/services-bg.jpg) no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .mobile_app_section {
            background: #fff url({{ asset('assets') }}/img/mobile-app-bg.jpg) no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /*
        .softwares .inner {
            background-image: url({{ asset('assets') }}/img/software-bg.png);
            background-size: cover;
            background-position: 10% 75%;
        }*/
    </style>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7582806068286695"
     crossorigin="anonymous"></script>
     
     
     <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WBLTGQ6');</script>
    <!-- End Google Tag Manager -->
     
</head>

<body class="<?php if(Request::segment(1) == NULL) : ?>home<?php else : ?>{{ Request::segment(1) }}<?php endif; ?>">
    <div class="main">
        <div class="header_wrapper @if(Request::is('/')) header_slider @endif"
            style="@if(!Request::is('/')) background: none; min-height: auto; height: auto @endif">
            
            @if(Request::is('/'))
                <div class="overlay-bg">
                    <img src="{{ asset('assets') }}/img/mobile-bg.jpg" alt="mobile-bg">
                </div>
            @endif
            
            <!-- header start -->
        	<header id="amar_menu">
        		<div class="container-fluid">
        			<div class="v-center" id="amarRow">
        				<div class="header-item item-left"> 
        					<div class="logo">
        						<a href="{{ url('/') }}"> <img src="{{ asset('assets') }}/img/logo-white.png" alt="logo">
        						</a>
        					</div>
        				</div>
        				<!-- menu start here -->
        				<div class="header-item item-center">
        					<div class="menu-overlay">
        					</div>
        					<nav class="menu">
        						<div class="mobile-menu-head">
        							<div class="go-back"><i class="fa fa-angle-left"></i></div>
        							<div class="current-menu-title"></div>
        							<div class="mobile-menu-close">&times;</div>
        						</div>
        						<ul class="menu-main">
        							<li>
        								<a href="{{ url('/') }}">Home</a>
        							</li>
        							<li class="menu-item-has-children">
        								<a href="javascript:void(0)">About <span class="icon">&laquo;</span></a>
        								<div class="sub-menu single-column-menu">
        								    <span class="btn_close_sub_menu" style="display: none;">×</span>
        									<ul>
        										<li class="@if(Request::is('about')) active @endif">
                                                    <a href="{{ url('/about') }}">About WorldSoftZone</a>
                                                </li>
                                                <li class="@if(Request::is('why-choose-us')) active @endif">
                                                    <a href="{{ url('/why-choose-us') }}">Why you Choose us</a>
                                                </li>
                                                <li class="@if(Request::is('dedicated-team')) active @endif">
                                                    <a href="{{ url('/dedicated-team') }}">Our Dedicated Team</a>
                                                </li>
                                                <li class="@if(Request::is('portfolio')) active @endif">
                                                    <a href="{{ url('/portfolio') }}">Portfolio</a>
                                                </li>
        									</ul>
        								</div>
        							</li>
        							<li class="menu-item-has-children">
        								<a href="javascript:void(0)">Services <span class="icon">&laquo;</span></a>
        							<div class="megaMenu">
        								<div class="sub-menu mega-menu mega-menu-column-4">
        								    <span class="btn_close_sub_menu" style="display: none;">×</span>
        									<div class="list-item">
        										<h3><a class="@if(Request::is('web-services') || Request::is('web-services/*')) active @endif" href="{{ url('web-services') }}">Website</a></h3>
        										<ul>
        											<li class="@if(Request::is('web-services/website-development')) active @endif">
                                                                <a href="{{ url('web-services/website-development') }}">Website Development</a>
                                                            </li>
                                                            <li class="@if(Request::is('web-services/convert-website')) active @endif">
                                                                <a href="{{ url('web-services/convert-website') }}">Convert website</a>
                                                            </li>
                                                            <li class="@if(Request::is('web-services/theme-development-customization')) active @endif">
                                                                <a href="{{ url('web-services/theme-development-customization') }}">Theme Development
                                                                    & Customization</a>
                                                            </li>
                                                            <li class="@if(Request::is('web-services/fix-website-error')) active @endif">
                                                                <a href="{{ url('web-services/fix-website-error') }}">Fix Website Error</a>
                                                            </li>
                                                            <li class="@if(Request::is('web-services/speed-optimization')) active @endif">
                                                                <a href="{{ url('web-services/speed-optimization') }}">Speed Optimization</a>
                                                            </li>
        										</ul>
        									</div>
        
                                            <div class="list-item">
                                            <h3><a class="@if(Request::is('virtual-assistant') || Request::is('virtual-assistant/*')) active @endif" href="{{ url('virtual-assistant') }}">Virtual Assistant</a></h3>
                                                        <ul>
                                                            <li class="@if(Request::is('virtual-assistant/data-entry-online-offline')) active @endif">
                                                                <a href="{{ url('virtual-assistant#data_entry') }}">Data Entry Online & Offline</a>
                                                            </li>
                                                            <li class="@if(Request::is('virtual-assistant/website-dev-and-maintenance')) active @endif">
                                                                <a href="{{ url('virtual-assistant#website_dev') }}">Website Dev and Maintenance</a>
                                                            </li>
                                                            <li class="@if(Request::is('virtual-assistant/digital-marketing')) active @endif">
                                                                <a href="{{ url('virtual-assistant#digital_marketing') }}">Digital Marketing</a>
                                                            </li>
                                                            <li class="@if(Request::is('virtual-assistant/seo')) active @endif">
                                                                <a href="{{ url('virtual-assistant#seo') }}">SEO (Search Engine Optimization)</a>
                                                            </li>
                                                        </ul>
        									</div>
        
        
        									<div class="list-item">
        										<h3><a class="@if(Request::is('software') || Request::is('software/*')) active @endif" href="{{ url('software') }}">Software</a></h3>
                                                        <ul>
                                                            <li class="@if(Request::is('software/sales-inventory-system')) active @endif">
                                                                <a href="{{ url('software/sales-inventory-system') }}">Sales & Inventory System</a>
                                                            </li>
                                                            <li class="@if(Request::is('software/accounting-erp-solution')) active @endif">
                                                                <a href="{{ url('software/accounting-erp-solution') }}">Accounting ERP Solution</a>
                                                            </li>
                                                            <li class="@if(Request::is('software/education-management-system')) active @endif">
                                                                <a href="{{ url('software/education-management-system') }}">Education Management System</a>
                                                            </li>
                                                            <li class="@if(Request::is('software/health-management-system')) active @endif">
                                                                <a href="{{ url('software/health-management-system') }}">Health Management System</a>
                                                            </li>
                                                            <li class="@if(Request::is('software/customize-software')) active @endif">
                                                                <a href="{{ url('software/customize-software') }}">Customize Software</a>
                                                            </li>
        									</div>
        
                                            <div class="list-item">
        									                                                <h3><a class="@if(Request::is('mobile-app') || Request::is('mobile-app/*')) active @endif" href="{{ url('mobile-app') }}">Mobile App</a></h3>
        
                                                        <ul>
                                                            
                                                            <li class="@if(Request::is('mobile-app/android-app-development')) active @endif">
                                                                <a href="{{ url('mobile-app/android-app-development') }}">Android App Development</a>
                                                            </li>
                                                            <li class="@if(Request::is('mobile-app/ios-app-development')) active @endif">
                                                                <a href="{{ url('mobile-app/ios-app-development') }}">IOS App Development</a>
                                                            </li>
                                                            <li class="@if(Request::is('mobile-app/react-native')) active @endif">
                                                                <a href="{{ url('mobile-app/react-native') }}">React Native</a>
                                                            </li>
                                                            
                                                        </ul>
        									</div>
        
                                            
        
        									<div class="list-item">
        										<h3><a class="@if(Request::is('graphic-deisgn') || Request::is('graphic-deisgn/*')) active @endif" href="{{ url('graphic-deisgn') }}">Graphic Design</a></h3>
                                                        <ul>
                                                            <li class="@if(Request::is('graphic-deisgn/motion-graphic')) active @endif">
                                                                <a href="{{ url('graphic-deisgn/motion-graphic') }}">Motion Graphic</a>
                                                            </li>
                                                            <li class="@if(Request::is('graphic-deisgn/ui-ux-design')) active @endif">
                                                                <a href="{{ url('graphic-deisgn/ui-ux-design') }}">UI UX Design</a>
                                                            </li>
                                                            <li class="@if(Request::is('graphic-deisgn/branding-design')) active @endif">
                                                                <a href="{{ url('graphic-deisgn/branding-design') }}">Branding Design</a>
                                                            </li>
                                                            <li class="@if(Request::is('graphic-deisgn/print-design')) active @endif">
                                                                <a href="{{ url('graphic-deisgn/print-design') }}">Print Design</a>
                                                            </li>
                                                            <li class="@if(Request::is('graphic-deisgn/publishing-design')) active @endif">
                                                                <a href="{{ url('graphic-deisgn/publishing-design') }}">Publishing Design</a>
                                                            </li>
                                                        </ul>
        									</div>
        								</div>
        					          </div>
        							</li>
        							<li>
        								<a class="@if(Request::is('blog')) active @endif" href="{{ url('/blog') }}">Blog</a>
        							</li>
        							<li>
        								<a class="@if(Request::is('contact')) active @endif" href="{{ url('/contact') }}">Contact</a>
        							</li>
        						</ul>
        						
        					</nav>
        					
        				</div>
        				<!-- menu end here -->
        				<div class="header-item item-right">
        				    <div class="right_menu">
        				        <ul>
        				            <li>
        				                <a target="_blank" href="https://wa.me/01841329494"><img src="{{ asset('/assets/img/logo/whatsapp.jpg') }}" /><span class="text">+880 1841329494</span></a>
        				            </li>
        				            <li>
        				                <a target="_blank" href="skype:cid.320da5b326ba50ff?chat"><img src="{{ asset('/assets/img/logo/skype.jpg') }}" /><span class="text">WorldSoftZone</span></a>
        				            </li>
        				        </ul>
        				    </div>
        					<!-- mobile menu trigger -->
        					<div class="mobile-menu-trigger">
        						<span></span>
        					</div>
        				</div>
        			</div>
        		</div>
        	</header>
        	<!-- header end -->
        	

            @if(Request::is('/'))
                @include('frontend.template-parts.slider')
            @endif


        </div>
    </div>
    <!--end header slider-->