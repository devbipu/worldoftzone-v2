<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Health Management System @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/single-software.css') }}">
<style>
    .single-software-template {
        background: #ddd url({{ asset('/assets/img/software/health_single_bg.jpg') }}) no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">Health Management System</h1>
    </div>
</div>

<div class="single-software-template health">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                
                <div class="soft_info">
                    <h1>Health Management System</h1>
                    <p>
                        Qualified staff forms only one part of a successful health facility, while well-established management makes the other part. Taking into account the complexity of any hospital ecosystem, the whole functioning of the entity is impossible without a proper software management system. The hospital management software can vary from one health organization to another, depending on the functionality it incorporates.
                    </p>
                </div>
                
                <div class="soft_feature">
                    <div class="sales_features_col">
                        <div>
                            <h3>--Product Feature</h3>
                            <p>Hospital Management Software  is aimed at facilitating the work of hospital staff, including interactions with patients. It helps with:
                            </p>
                            <ul>
                                <li>Automation of routine tasks.</li>
                                <li>Improved communication and coordination of staff.</li>
                                <li>Achieving a patient-centered approach.</li>
                                <li>Material and human resources management.</li>
                                <li>Supply chain control.</li>
                            </ul>
                        </div>
                        <div>
                            <h3>--Hospital Management System contains information about:</h3>
                            <ul>
                                <li>Doctors Schedules, appointments, emergency numbers.</li>
                                <li>Staff Contact numbers, professional information.</li>
                                <li>Patients Confidential personal data, medical history.</li>
                                <li>Laboratory results  Test and analysis results.</li>
                                <li>Supplies Medicine and instruments inventory.</li>
                                <li>Billing Hospital and patients spending.</li>
                                <li>Insurance Patient insurance data.</li>
                                <li>Statistical reports All the data analysis and diversified reports.</li>
                            </ul>
                        </div>
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
                <?php echo FunctionsController::get_a_quote('health-management-system'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
