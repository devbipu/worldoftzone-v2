@extends('frontend.layout')

@section('title') Graphic Design @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/graphic-design.css') }}">
<style>
</style>
@endsection


@section('content')

<div class="suppages_header">
    <video id="header_video" width="100%" height="100%" loop="" autoplay="" muted="" preload="none">
        <source src="{{ asset('assets/img/subpages/graphic-v-heading.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
         Your browser does not support the video tag.
    </video>
</div>

<div class="services">
    <div class="container-fluid">  
        <div class="service-item item-right m-reverse">
            <div class="col-2">
                <h1 class="heading -v font-3">
                    Motion Graphic
                </h1>
                <p>
                    It’s not because motion graphic eye-cache or feature cool animations. It’s because they’re a unique way to communicate. It's blend the best of visual communication with motion storytelling and audio to create an engaging piece of content that helps brands share their story, reach people in different ways, and present their message in a compelling package.
                </p>
                <p>
                    A motion graphic is our industry’s term for animated video. It's may be 2D animations, 3D renderings, or GIFS. It's may include audio, voiceover, or sound effects. It's may also incorporate technology like 360-degree video, Virtual Reality, or Augmented Reality. 
                </p>
            </div>
            <div class="col-1">
                <video width="100%" id="motion_graphic" height="auto" loop="" autoplay="" muted="" preload="none">
                    <source src="{{ asset('/assets/img/subpages/motion-graphic-single.mp4') }}" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                     Your browser does not support the video tag.
                </video>
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/graphic-deisgn/motion-graphic') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
        </div>
        <div class="service-item item-left">
            <div class="col-1">
                <img src="{{ asset('assets/img/subpages/ui-ux-design.jpg') }}" alt="ui-ux-design" />
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/graphic-deisgn/ui-ux-design') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
            
            <div class="col-2">
                <h1 class="heading -v font-3 text-left">
                    UI UX Design
                </h1>
                <p>
                    In every website and mobile application, there’s a graphic designer behind its success. These design specialists need a strong sense of UI UX design to make sure the sites we design are as user-friendly as conceivable on both desktops and mobile devices. 
                </p>
                <p>
                    We use all our skills to design online spaces that are visually appealing, easy to navigate, well-matched with SEO best practices and aligned with their clients’ branding.
                </p>
                <p>
                    We always try to satisfy our customer by providing the best service and keep in mind about look and field of the website
                </p>
            </div>
        </div>
        <div class="service-item item-right m-reverse">
            <div class="col-2">
                <h1 class="heading -v font-3">
                    Branding Design
                </h1>
                <p>
                    Branding is a type of corporate design that focuses on the visual identity of a company or product.
                </p>
                <p>
                    Our designers are in tune with the marketing message a brand wants to send, as well as the target audience client wish to reach. 
                </p>
                <p>
                    Every aspect of branding design must align with these goals, as well as fit into the larger aesthetic of the company or organization. 
                </p>
                <p>
                    Consumers’ perception of a company is often driven by their branding, so graphic designers in this specialty put all their skills to work developing a visual brand that will connect with the target audience and project the right message about the company.
                </p>
                <p>
                    We design-Logos, website branding, company letterhead, business cards, signage, company brochures.
                </p>
            </div>
            <div class="col-1">
                <img src="{{ asset('assets/img/subpages/branding-design.jpg') }}" alt="branding-design" />
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/graphic-deisgn/branding-design') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
        </div>
        <div class="service-item item-left">
            <div class="col-1">
                <img src="{{ asset('assets/img/subpages/print-design.jpg') }}" alt="print-design" />
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('graphic-deisgn/print-design') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
            </div>
            <div class="col-2">
                <h1 class="heading -v font-3">
                    Print Design
                </h1>
                <p>
                    The digital age may have changed the world of graphic design, but that doesn’t mean there’s not still a market for print! We are specialized in creating work that is meant to be viewed in a physical capacity.
                </p>
                <p>
                    From billboards to business cards, we are able to create digital designs that go beyond the screen and interpret well to the physical empire. We designed-Brochures, flyers, billboards, stickers, stationery sets, T-shirts, mugs and other products.
                </p>
            </div>
        </div>
        <div class="service-item item-right m-reverse">
            <div class="col-2">
                <h1 class="heading -v font-3">
                    Publishing Design
                </h1>
                <p>
                     We work in the publishing industry typically work on books or magazines. We are responsible for creating eye-catching covers that will appeal to the market audience, as well as designing page layouts that present information in a way that’s appealing and easy to read.
                </p>
                <p>
                    We work closely with writers and editors to accomplish just the right look for a project, whether it’s designing an eye-catching edgy photo spread for a magazine or selecting just the right font for the next bestseller.
                </p>
                <p>
                    We designed-Book and magazine covers, ebook layout and design, magazine spreads, graphs or other images in nonfiction books.
                </p>
            </div>
            <div class="col-1">
                <img src="{{ asset('assets/img/subpages/publish-design.jpg') }}" alt="publish-design" />
                
                <div class="action text-right">
                    <a class="btn btn-2" href="{{ url('/graphic-deisgn/publishing-design') }}"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"/></span></a>
                </div>
                
            </div>
        </div>
        
    </div>
</div>

@endsection

@section('js')

<script>
    $(document).ready(function(){
        /* now play three times as fast just for the heck of it */
        document.getElementById('header_video').playbackRate = 3.0;
    
    })
        
</script>

@endsection
