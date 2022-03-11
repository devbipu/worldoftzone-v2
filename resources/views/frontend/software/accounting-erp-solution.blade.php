<?php
    use App\Http\Controllers\FunctionsController;
?>
@extends('frontend.layout')

@section('title') Accounting ERP Solution @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/single-software.css') }}">
<style>
    .single-software-template {
        background: #ddd url({{ asset('/assets/img/software/accounting_single_pg.jpg') }}) no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection


@section('content')

<div class="suppages_header">
    <div class="container-fluid">
        <h1 class="heading font-3">Accounting ERP Solution</h1>
    </div>
</div>

<div class="single-software-template accounting-erp-solution">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="soft_info">
                    <h1>Accounting ERP Solution</h1>
                    <p>
                        A successful ERP implementation requires solid accounting software functionality. ERP accounting software eliminates any boundaries between various departments by offering a unified ERP solution, natively built on the Salesforce platform. ERP is the leading ERP software on the Salesforce platform that connects your customers, employees, and products into one system, all with a consistent view of your customer's entire journey. Unlike traditional ERP systems, software applications are built to advance, upgrade, and configure. Embedded on the Salesforce platform, ERP allows contextually relevant conversations to be tracked alongside transactions, accounts, reports, or other objects.
                    </p>
                </div>
                <div class="soft_feature">
                    <div class="sales_features_col">
                        <h3>--View Product Feature</h3>
                        <ul>
                            <li>Saves time and money to improve customer experiences</li>
                            <li>It’s easy to buy, deploy, learn and extend</li>
                            <li>Increases the pace of your business</li>
                            <li>Report</li>
                            <li>Income report</li>
                            <li>Expense report</li>
                            <li>Ledger Report</li>
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
                <?php echo FunctionsController::get_a_quote('accounting-erp-solution'); ?>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

@endsection
