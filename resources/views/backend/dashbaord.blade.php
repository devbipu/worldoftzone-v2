@extends('backend.layout.admindb')

@section('bc-title') Dashboard @endsection

@section('adminBodyContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Welcome to your control panel.</h3>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
