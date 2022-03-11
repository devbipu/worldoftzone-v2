<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/canva.png') }}" alt="canva"/>
            </div>
            <div class="col-2">
                <h1>Canva to Website</h1>
                <p>You have Canva template and now want to convert it to web pages?  Welcome to WorldSoftZone, you are on the right place. We are offering Canva to dynamic Website conversion services. Let's see what we are offering.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We will do</h2>
                    <ul>
                        <li>Pixel perfect Canva to HTML design.</li>
                        <li>Mobile-Friendly Responsive Design (desktop, tablet, mobile devices)</li>
                        <li>jQuery Effects ( Slider, Carousel, Sticky Menu, Etc).</li>
                        <li>Google fonts included</li>
                        <li>Latest Bootstrap support.</li>
                        <li>Live preview support after delivering any project.</li>
                        <li>CSS 3 Animation.</li>
                        <li>Fast loading speed and optimized the HD images.</li>
                        <li>SEO Friendly.</li>
                        <li>Cross-Browser Compatible! (Firefox,IE9+, Chrome, Safari, Opera)</li>
                        <li>All code is HAND CODED</li>
                    </ul>
                    <div class="spacer-20"></div>
                    
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('canva') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>