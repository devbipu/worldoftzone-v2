<?php
    use App\Http\Controllers\FunctionsController;
?>
<div class="service_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('/assets/img/logo/laravel.png') }}" alt="laravel"/>
            </div>
            <div class="col-2">
                <h1>Laravel</h1>
                <p>Laravel is one of the most popular open-source frameworks for website development. It's a powerful tool that meets specific needs and is used to construct an exceptional CMS or Web application. ... Laravel website development simplifies the majority of project tasks, saving time and efforts. If you want a secure and world-class website, then let's start, our team is ready to work with you.</p>
                
                <div class="in-content">
                    <div class="spacer-20"></div>
                    
                    <h2>We are ready to do</h2>
                    <ul>
                        <li>Develop Laravel website from scratch</li>
                        <li>Installing Laravel script</li>
                        <li>Adding new features in php / laravel wesbite</li>
                        <li>Fixing bugs from your existing script</li>
                        <li>Fix and modify Modules</li>
                        <li>Upgrading to latest version</li>
                        <li>Integrating the application with external apis</li></ul>
                        <li>API development</li>
                        <li>Codecanyon scripts customizations</li>
                        <li>Payment Gateway Integration (PayPal, Stripe, Payfast and many more.. )</li>
                        <li>Codecanyon scripts customizations</li>
                        <li>Social media login</li>
                        <li>Laravel Livewire</li>
                        <li>Inertia.js</li>
                        <li>Fortify</li>
                    </ul>
                    
                    <div class="action">
                        <?php echo FunctionsController::get_a_quote('laravel') ;?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>