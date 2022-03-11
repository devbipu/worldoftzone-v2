<?php
use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Virtual Assistant @endsection
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/website-development.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/virtual-assistant.css') }}">
@section('css')

@endsection


@section('content')

<div class="virtual-assistant-template">
 
    <div class="suppages_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                   <h1 class="heading font-3">Outsource your headache <span>
                       we are ready to takeover
                   </span></h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="global_services website-development">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <div class="service-box">
                        <div class="top">
                            <img src="{{ asset('/assets/img/subpages/euro-currency-symbol.png') }}" width="80" height="80" alt="euro-currency-symbol">
                            <a class="title">Save Money</a>
                            <p>
                                Virtual Assistant saves your money, your time and will let you focus on tasks that are more important and worth your time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="service-box">
                        <div class="top">
                            <img src="{{ asset('/assets/img/subpages/save-time.png') }}" width="80" height="80" alt="save-time">
                            <a class="title">Save Time</a>
                            <p>
                                Virtual Assistant can save your productive day per week. You could use that time making more sales or connecting with more people.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="service-box">
                        <div class="top">
                            <img src="{{ asset('/assets/img/subpages/work-life.png') }}" width="80" height="80" alt="work-life">
                            <a class="title">Work & Life Balance</a>
                            <p>Using services of a virtual assistant will help you keep a health balance in your work and personal life leading to great Work proficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="setion-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <h1>Get Your Own Skilled Virtual <span>Assistant Team</span></h1>
                    <div class="inner">
                        <p>
                            When a business leader tries to do everything on his or her own, he becomes less efficient. He becomes exhausted and faces the risk of burning out. If you find yourself in the same boat, its probably time to hire us.
                        </p>
                        <p>
                            We are not one, we are a team and we are always ready to solve your issues. You need not to waste your energy and time on tasks that someone else can do just as easily. You focus on tasks that actually help to grow your business.
                        </p>
                        <p>
                            We believe, a good business leader concentrates on activities that have the greatest impact on the business.
                        </p>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/img/subpages/wsz-logo.png') }}" alt="wsz-logo" />
                </div>
            </div>
        </div>
    </div>
    
    <div class="setion-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="text-center" style="color: #fff">This can be a beautiful new beginning for your Business</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bxwrp">
        <div class="item" id="data_entry">
            <div class="media">
                <img src="{{ asset('/assets/img/subpages/data-entry.png') }}" alt="data-entry" />
            </div>
            <div class="content">
                <h1>Data Entry Online & Offline</h1>
                <p>
                    Are you unable to devote enough time to improve business productivity? If so, it's best to outsource the administrative legwork to a professional data entry virtual assistant. Hire our virtual assistant for data entry service and pay only for the work done.
                </p>
                <p>
                    Data entry virtual assistant services from WSZVA team is an assured way to keep your calendar clean and organized. When our data entry remote assistant is assigned data entry roles, his/her style of execution is guaranteed to outclass insourcing or any other substitutes. So, get ready to accelerate your administrative performance with WSZVA affordable data entry virtual assistant services.
                </p>
                
                <p class="mark">
                    <b>We recommend switching to data entry virtual assistant services from WSZVA for the following merits -</b>
                </p>
    
                <ul>
                    <li>Pay Only for the Work Done</li>
                    <li>No Administrative Concerns</li>
                    <li>Quality Services</li>
                    <li>Timeliness</li>
                    <li>Specialized Professionals Dedicated to your Tasks</li>
                    <li>Flexibility to Scale at Your Own Pace</li>
                    <li>High Data Confidentiality & Security</li>
                </ul>
                <div class="spacer-20"></div>
                <?php echo FunctionsController::get_a_quote('data-entry'); ?>
                
            </div>
        </div><!-- End Item -->
        <div class="item m-reverse" id="website_dev">
            <div class="content">
                <h1>Website Dev And Maintenance</h1>
                <p>
                    If you are looking for effective, reliable, and affordable assistance to maintain your website, our virtual assistant can help you.
                </p>
                <p>
                    They are equipped with special skills to understand the maintenance that a website requires and boost SEO, helping make your business website more visible and driving additional traffic. You can avail of the followingvirtual assistant services for website upkeep.
                </p>
                <p class="mark">
                    <b>Here is a list of some of the website maintenance services and functionality skills that we provide:</b>
                </p>

                <ul>
                    <li>Updates and backups your website</li>
                    <li>Image optimization</li>
                    <li>Functionality Enhancements </li>
                    <li>Search Engine Optimization [SEO] Support</li>
                    <li>Create landing pages and maintaining form</li>
                    <li>Manage your online store</li>
                    <li>Provide CRM and social media integration</li>
                </ul>
                <div class="spacer-20"></div>
                <?php echo FunctionsController::get_a_quote('website-dev-maintenance'); ?>
            </div>
            <div class="media">
                <img src="{{ asset('/assets/img/subpages/web_maint.png') }}" alt="web_maint" />
            </div>
        </div><!-- End Item -->
        <div class="item" id="digital_marketing">
            <div class="media">
                <img src="{{ asset('/assets/img/subpages/digital-marketing.png') }}" alt="digital-marketing" />
            </div>
            <div class="content">
                <h1>Digital Marketing</h1>
                <p>
                    Our virtual assistant works remotely to assist your marketing team. You can hire our digital marketing virtual assistant at just a fraction of the cost of hiring full time. In fact, it is also possible to hire us for specific digital marketing campaigns. If you find yourself on the verge of a burnout, it is time to get some help. If you want to get more hours in your day, hiring a WSZVA is the way to go.
                </p>
                <p class="mark">
                    <b>Our digital marketing virtual assistant can perform the following tasks:</b>
                </p>

                <ul>
                    <li>Email marketing</li>
                    <li>Creating newsletters</li>
                    <li>Keyword research</li>
                    <li>Content marketing</li>
                    <li>Blog management</li>
                    <li>Social media management</li>
                    <li>Creating lead magnets</li>
                    <li>Analyzing competitor strategies and many more</li>
                </ul>
                <div class="spacer-20"></div>
                <?php echo FunctionsController::get_a_quote('digital-marketing'); ?>
            </div>
        </div><!-- End Item -->
        <div class="item m-reverse" id="seo">
            <div class="content">
                <h1>SEO (Search Engine Optimization)</h1>
                <p>
                    SEO enables your business to be visible online by placing your website on the ranking scale, primarily on Google search. SEO strategies are aimed at giving your business an edge over the competition, and increasing conversions, which means more sales, more loyal customers, and more growth for your business.
                </p>
                <p class="mark">
                    <b>WSZ team are ready to serve you. Let us count the other ways SEO can benefit you:</b>
                </p>
                <ul>
                    <li>To make sure your relevant content is shared and talked about</li>
                    <li>To provide a positive user experience that greatly impacts consumer decision</li>
                    <li>To improve website visibility through organic search results</li>
                    <li>To integrate the right strategy in your marketing mix and social media efforts</li>
                    <li>To improve site conversions as end result</li>
                </ul>
                <div class="spacer-20"></div>
                <?php echo FunctionsController::get_a_quote('seo'); ?>
            </div>
            <div class="media">
                <img src="{{ asset('/assets/img/subpages/seo.png') }}" alt="seo" />
            </div>
        </div><!-- End Item -->
	</div>
    
    
    <div class="bg-title">
        <div class="container-fluid">
            <h1 class="text-center heading font-3">Valued Clients</h1>
        </div>
    </div>
    
    <div class="setion-4">
        <div class="container-fluid">
            <div class="row">
                
                <div class="client-slider">
                    <div class="item">
                        <img src="{{ asset('/assets/img/portfolio/amio.png') }}" alt="amio" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/assets/img/portfolio/nanoforexcorp.png') }}" alt="nanoforexcorp" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/assets/img/portfolio/fxmade.png') }}" alt="fxmade" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/assets/img/portfolio/alvinfooseo.png') }}" alt="alvinfooseo" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/assets/img/portfolio/mypureessentialoils.png') }}" alt="mypureessentialoils" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('/assets/img/portfolio/maxclix.webp') }}" alt="maxclix" />
                    </div>
                </div>
                
	        </div>
	    </div>
	</div>

</div>




@endsection


@section('js')

@endsection
