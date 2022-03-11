<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Sales & Inventory System @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/single-software.css') }}">
<style>
    .single-software-template {
        background: #ddd url({{ asset('/assets/img/software/sales_single_pg.jpg') }}) no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">Sales & Inventory System</h1>
    </div>
</div>

<div class="single-software-template sales-inventory">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="soft_info">
                    <h1>Sales & Inventory System</h1>
                    <p>
                        Our Inventory Management System is an application software that records and processes Stock Management, accounting transactions within functional modules such as accounts payable, accounts receivable, Income & Expenses.
                    </p>
                </div>
                <div class="soft_feature">
                    <div class="sales_features_col">
                        <h3>--View Product Feature</h3>
                        <ul>
                            <li>Work Order management</li>
                            <li>Stock</li>
                            <li>Accounts</li>
                            <li>Income</li>
                            <li>Expense</li>
                            <li>Bank</li>
                            <li>Report</li>
                            <li>Sales</li>
                            <li>Purchase</li>
                            <li>Products</li>
                            <li>Contacts</li>
                            <li>Human Resource</li>
                            <li>Ledger Report</li>
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
                <?php echo FunctionsController::get_a_quote('sales-inventory-system'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
