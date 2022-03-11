<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/wordpress.png') }}" alt="wordpress"/>
            </div>
            <div class="col-2">
                <h1>WordPress</h1>
                <p>WordPress is the most famous CMS in the world.  With WordPress, You can create any type of website you want: a personal blog or website, a photoblog, a business website, a professional portfolio, a government website, a magazine or news website, an online community, even a network of websites. WordPress makes it very easy to maintain a website. You can edit, change, add pages, content visualy.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We build various kind of wordpress website. </h2>
                    <ul>
                        <li>Business website</li>
                        <li>Agency website</li>
                        <li>Ecommerce website</li>
                        <li> Professional portfolios</li>
                        <li>Blog & News Paper</li>
                        <li>Landing pages design.</li>
                        <li>Online communities</li>
                        <li>Wiki/Knowledge Websites.</li>
                    </ul>
                    
                    <div class="spacer-20"></div>
                    
                    <h2>Feature you will get</h2>
                    <ul>
                        <li>100% Responsive For Any Device</li>
                        <li>Adding Full Security</li>
                        <li>Adding Google Maps Contact Forms</li>
                        <li>Fast Loading Speed</li>
                        <li>Full Ecommerce Functionality</li>
                        <li>Social media Integration</li>
                        <li>Friendly back end panel with drag and drop</li>
                        <li>Online Contact Forms</li>
                        <li>Signup/Newsletter Form</li>
                        <li>Custom Post/Taxonomy Type Support</li>
                        <li>Custom page(single,post) design</li>
                        <li>Include design-wise functions, like accordion, Lightbox, Toggle, Pop up, And also others if need.</li>
                        <li>Pixel Perfect Design as your template.</li>
                        <li>On-Page Seo (if Client give SEO meta tags)</li>
                        <li>All Device and Browser Compatibility</li>
                        <li>Custom Post/Taxonomy Type Support</li>
                    </ul>
                    
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('wordpress') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>