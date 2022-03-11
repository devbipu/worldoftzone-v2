<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/YII2.png') }}" alt="YII2"/>
            </div>
            <div class="col-2">
                <h1>YII2</h1>
                <p>Yii is a high-performance, component-based PHP framework for developing large-scale Web applications rapidly. It enables maximum reusability in Web programming and can significantly accelerate your Web application development process.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We will do</h2>
                    <ul>
                        <li>Installing yii2 script</li>
    	                <li>Adding new features in php / yii2 wesbite</li>
    	                <li>Fixing bugs from your existing script</li>
    	                <li>Fix and modify Modules</li>
    	                <li>Upgrading to latest version</li>
    	                <li>Integrating the application with external apis</li>
    	                <li>API development</li>
    	                <li>Codecanyon scripts customizations</li>
    	                <li>Payment Gateway Integration (PayPal, Stripe, Payfast and many more.. )</li>
    	                <li>Codecanyon scripts customizations</li>
    	                <li>Social media login</li>
    	                <li>yii2 Livewire</li>
    	                <li>Fortify</li>
                    </ul>
                    
                    
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('yii2') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>