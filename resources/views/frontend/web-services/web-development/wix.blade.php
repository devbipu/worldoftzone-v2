<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/wix.svg') }}" alt="wix"/>
            </div>
            <div class="col-2">
                <h1>WIX</h1>
                <p>Wix is a free, user-friendly, website building platform. Our intuitive technology and powerful built-in features give our users the freedom to design professional websites with ease that look amazing on any device. Wix is more than a website, though. So if you want to build a website with Wix, that's the best decision. Our dedicated team is ready to work with you.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>Feature you will get</h2>
                    <ul>
                        <li>A fully custom WIX site</li>
                        <li><strong>Wix Mobile Friendly</strong></li>
                        <li><strong>I Will Redesign Wix Website</strong></li>
                        <li>Add High quality images</li>
                        <li>Transfer your current web-site to WIX.</li>
                        <li>Specific sections designs</li>
                        <li>On Page-SEO</li>
                        <li>Professional Ecommerce website ( Online Store )</li>
                        <li>100% satisfaction</li>
                        <li>Create site including ,<strong>Blog</strong>, portfolio , <strong>onlinestore</strong> , <strong>salon</strong> , sports , <strong>Restaurants</strong> &amp; hotels, tourism , business sites . Fashion Merchandise.&nbsp;</li>
                        <li>Google Analytics set up</li>
                        <li>Facebook Pixel setup</li>
                        <li>Speed Optimization</li>
                        <li>Free Stock images (Licensed) </li>
                        <li>Free Support & Consultation </li>
                    </ul>
                    <div class="spacer-20"></div>
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('wix') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>