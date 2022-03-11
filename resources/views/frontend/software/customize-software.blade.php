<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Customize Software @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/single-software.css') }}">
<style>
    .single-software-template {
        background: #ddd url({{ asset('/assets/img/software/custom_soft.jpg') }}) no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">Customize Software</h1>
    </div>
</div>

<div class="single-software-template customize-software">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="soft_info">
                    <h1>Customize Software</h1>
                    <p>
                        The working environment in the entire world is changing very fast. The world is shifting from the traditional style of working environment to more and more sophisticated and techno savvy one. For accomplish this transformation, these companies are taking recourse of advanced technology and extensively using computers. 
                    </p>
                    <p>
                        In fact, acquiring the latest technology and going for Software Development has become main means of doing business in the current world. This increasing demand of software development has led to the flourishing of the IT consultancy industry world over. 
                    </p>
                    <p>
                        In the present-day highly competitive world, every organization is looking for tailor made, cost effective, high quality, scalable customized solutions that could function speedily and provide quick results. 
                    </p>
                    <p>
                        To accomplish this task, many organization is taking the help of cutting edge technologies to provide them a suitable solution their needs. Appropriate customized software development has become the key for producing such a solution. 
                    </p>
                    <p>
                        This is one reason that has been increasing the importance of developing customized software solutions more and more. One of the major benefits of developing customized solution is that it provides a solution which is as per your exact requirement and provides only those functionalities required by you.
                    </p>
                </div>
                <div class="soft_feature">
                    <div class="sales_features_col">
                        <h3>--Already developed</h3>
                        <ul>
                            <li>Sales & Inventory System.</li>
                            <li>Accounting ERP Solution.</li>
                            <li>Education Management System.</li>
                            <li>Health Management System.</li>
                            <li>Restaurant Automation System.</li>
                            <li>Point of Sale (POS) System.</li>
                            <li>Prescription Management System.</li>
                            <li>Internet Service Provider Billing.</li>
                            <li>Multilevel marketing (MLM) System.</li>
                            <li>Supper Shop Management System.</li>
                            <li>Dealership Management System.</li>
                        </ul>
                    </div>
                    <div style="sales_features_col">
                        <h3>--Platforms & frameworks</h3>
                        <ul>
                            <li>Laravel</li>
                            <li>PHP</li>
                            <li>MySql</li>
                            <li>HTML, CSS, BootStrap</li>
                            <li>JavaScript, jQuery</li>
                        </ul>
                    </div>
                </div>
                
                <div class="spacer-20"></div>
                <!--<a class="btn btn-2" target="_blank" href="#"><span class="text">View Details</span> <span class="icon"><img src="{{ asset('/assets/img/btn-next.png') }}" alt="btn-next"></span></a>-->
                
                <?php echo FunctionsController::get_a_quote('customize-software'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
