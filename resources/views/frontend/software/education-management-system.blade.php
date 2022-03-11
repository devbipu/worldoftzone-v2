<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Education Management System @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/single-software.css') }}">
<style>
    .single-software-template {
        background: #ddd url({{ asset('/assets/img/software/edu_single_page.jpg') }}) no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">Education Management System</h1>
    </div>
</div>

<div class="single-software-template education">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="soft_info">
                    <h1>Education Management System</h1>
                    <p>
                        Education Management Systems, Inc. is an educational organization and management solution  unique opportunities . EMS managed schools provide one-on-one attention and guidance, personalized learning plans, and a focus on social-emotional growth to allow students to find personal and academic success in high school and beyond. Our experience 5 year and includes launching and managing some of the largest schools in the B.D. Services include accounting administration, payroll, marketing, human resources, strategic planning, and risk management.
                    </p>
                </div>
                <div class="soft_feature">
                    <div class="sales_features_col">
                        <h3>--Product Feature</h3>
                        <ul>
                            <li>Online Admission Application System.</li>
                            <li>Student Attendance with SMS Notification System.</li>
                            <li>Human Resources (Employee, Teacher & Stuffs) Management.</li>
                            <li>Student Management.</li>
                            <li>Library Management.</li>
                            <li>Transport Management & Tracking System.</li>
                            <li>Accounts & Online Fees Payment.</li>
                            <li>Internal messaging and greetings SMS system.</li>
                            <li>Website Management.</li>
                            <li>Printable Report & Academic Papers.</li>
                        </ul>
                    </div>
                    <div class="sales_features_col">
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
                <?php echo FunctionsController::get_a_quote('education-management-system'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
