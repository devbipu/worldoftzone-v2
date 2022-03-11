<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/codeigniter.png') }}" alt="codeigniter"/>
            </div>
            <div class="col-2">
                <h1>Codeigniter</h1>
                <p>The biggest reason to rely on CodeIgniter is the fact that this platform is based on MVC (Model View Controller) which enhances the overall dependency of this platform. ... Apart from this, MVC enhances the development procedure and also offers easy integration with the JavaScript frameworks. It facilitates a simple routing method. So let's start, our team is waiting for you.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We will do</h2>
                    <ul>
                        <li>Installing codeigniter script</li>
    	                <li>Adding new features in php / codeigniter wesbite</li>
    	                <li>Fixing bugs from your existing script</li>
    	                <li>Fix and modify Modules</li>
    	                <li>Upgrading to latest version</li>
    	                <li>Integrating the application with external apis</li>
    	                <li>API development</li>
    	                <li>Codecanyon scripts customizations</li>
    	                <li>Payment Gateway Integration (PayPal, Stripe, Payfast and many more.. )</li>
    	                <li>Codecanyon scripts customizations</li>
    	                <li>Social media login</li>
    	                <li>codeigniter Livewire</li>
    	                <li>Fortify</li>
                    </ul>
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('codeigniter') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>