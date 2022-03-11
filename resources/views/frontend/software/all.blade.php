@extends('frontend.layout')

@section('title') Software @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/web-service.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/website-development.css') }}">
<style>
    .global_services.website-development {
        background: #ddd url({{ asset('/assets/img/subpages/mobile-app.jpg') }}) no-repeat;
        background-position: center center;
        background-size: cover;
    }
</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">USE SOFTWARE IN BUSINESS<span>
            ELIMINATE HUMAN ERROR
        </span></h1>
    </div>
</div>

<div class="global_services website-development">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/sales-inventory.png') }}" width="80" height="80" alt="sales-inventory">
                        <a class="title">Sales & Inventory Software</a>
                        <p>
                            WorldSoftZone provides the best Sales and inventory software for your business. Let's see what the main feature of this.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="{{ url('software/sales-inventory-system') }}">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/accounting-erp.png') }}" width="80" height="80" alt="accounting-erp">
                        <a class="title">Accounting & HR Solution</a>
                        <p>
                            WorldSoftZone provides the best Accounting ERP software for your business. Let's see what the main feature you will get.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="{{ url('software/accounting-erp-solution') }}">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/education.png') }}" width="80" height="80" alt="education">
                        <a class="title">Education Management Software</a>
                        <p>
                            WorldSoftZone provides the best Education Management System software to make your academy fully automated.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="{{ url('software/education-management-system') }}">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/hospital-management.png') }}" width="80" height="80" alt="hospital-management">
                        <a class="title">Health Management Software</a>
                        <p>
                           WorldSoftZone provides the best Health Management software to make your clinic fully automated.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="{{ url('software/health-management-system') }}">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="service-box">
                    <div class="top">
                        <img src="{{ asset('/assets/img/subpages/custom-software.png') }}" width="80" height="80" alt="custom-software">
                        <a class="title">Customize Software</a>
                        <p>
                           We are ready to build your software base ur need. So to get your software as per your requirement, Let's start.
                        </p>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-2" href="{{ url('software/customize-software') }}">
                            <span class="text">View Details</span> 
                            <span class="icon"><img src="{{ asset('assets/img/btn-next.png') }}" alt="btn-next"></span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
        
    </div>
</div>



@endsection


@section('js')

@endsection
