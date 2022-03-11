<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/squarespace.png') }}" alt="squarespace"/>
            </div>
            <div class="col-2">
                <h1>Squarespace</h1>
                <p>Squarespace offers flexible layouts, custom color palettes, Google and TypeKit fonts, free high quality images through Unsplash, built-in photo editing capabilities, video, and background banners, and more. It's a smart decision to build a website on Squarespace. So let's start, our team is waiting for you.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We will do</h2>
                    <ul>
                        <li>Online Store/ e-commerce Functionality Integration With Unique Squarespace Design.</li>
                        <li>Membership Functionality Integration With Unique, Stunning, And Professional Squarespace Design.</li>
                        <li>Booking Functionality Integration With Unique, Stunning, And A Professional Squarespace site.</li>
                        <li>BLog Functionality Integration With Unique, Stunning, And A Professional Squarespace site.</li>
                        <li>Connect your custom domain with your Squarespace site.</li>
                        <li>Any kind of online courses, you can sell with your Squarespace website. Very easily. Like a GYM, Education, Private Program etc.</li>
                        <li>We can manage a full event with Squarespace management. Like as wedding management.</li>
                        <li>We can make a professional and business Squarespace photography site.</li>
                        <li><b>Anyting else (contact us)</b></li>
                    </ul>
                    <div class="spacer-20"></div>
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('squarespace') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>