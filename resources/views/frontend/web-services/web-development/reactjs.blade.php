<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/reactjs.png') }}" alt="reactjs"/>
            </div>
            <div class="col-2">
                <h1>ReactJS</h1>
                <p>It's used for handling the view layer for web and mobile apps. React also allows us to create reusable UI components. ... React allows developers to create large web applications that can change data, without reloading the page. The main purpose of React is to be fast, scalable, and simple.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We will do</h2>
                    <ul>
                        <li>Installing React script</li>
    	                <li>Adding new features in php / React wesbite</li>
    	                <li>Fixing bugs from your existing script</li>
    	                <li>Fix and modify Modules</li>
    	                <li>Upgrading to latest version</li>
    	                <li>Integrating the application with external apis</li>
    	                <li>API development</li>
    	                <li>Codecanyon scripts customizations</li>
    	                <li>Payment Gateway Integration (PayPal, Stripe, Payfast and many more.. )</li>
    	                <li>Codecanyon scripts customizations</li>
    	                <li>Social media login</li>
    	                <li>React Livewire</li>
    	                <li>Fortify</li>
                    </ul>
                    <div class="action">
                         <?php echo FunctionsController::get_a_quote('reactjs') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>