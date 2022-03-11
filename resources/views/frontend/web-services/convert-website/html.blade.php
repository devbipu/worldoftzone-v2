<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/html.webp') }}" alt="html"/>
            </div>
            <div class="col-2">
                <h1>HTML to Website</h1>
                <p>You have static HTML and now want to convert it to web pages?  Welcome to WorldSoftZone, you are on the right place. We are offering static HTML website to dynamic Website conversion services. Let's see what we are offering. </p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We will do</h2>
                    <ul>
                        <li>Fully functional and dynamic website</li>
                        <li>Pixel perfect PDF to HTML design.</li>
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
                    
                    <h2>Feature you will get</h2>
                    <ul>
                        <li>Build your dream website from your model website</li>
                        <li>Build WP custom theme from your Html, PSD, xd template</li>
                        <li>Pixel Perfect Design as your template.</li>
                        <li>On-Page Seo (if Client give SEO meta tags)</li>
                        <li>All Device and Browser Compatibility</li>
                        <li>Fully Functional Responsive Themee</li>
                        <li>Ecommerce functionality</li>
                        <li>Custom Post/Taxonomy Type Support</li>
                        <li>Custom page(single,post) design</li>
                        <li>Include design-wise functions, like accordion, Lightbox, Toggle, Pop up, And also others if need.</li>
                    </ul>
                    
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('html') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>