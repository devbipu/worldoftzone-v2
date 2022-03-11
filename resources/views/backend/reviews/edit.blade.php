@extends('backend.layout.admindb')

@section('bc-title') Edit Review @endsection

@section('adminBodyContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    
                    <h3>Edit Review</h3>
                    
                    @include('backend.message')
                    
                    <form method="post" action="{{ url('/dashboard/reviews/update/'.$get_data->id) }}">
                        @csrf

                      <div class="form-group">
                        <label for="client_name">Client Name * </label>
                        <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name') ? old('client_name') : $get_data->client_name }}" placeholder="Enter Client Name">
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('client_name') }}
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="mytextarea">Review Description * </label>
                        <textarea class="form-control" id="mytextarea"  name="review_description">{{ old('review_description') ? old('review_description') : $get_data->review_description }}</textarea>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('review_description') }}
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label>Rate </label>
                        <input type="text" class="form-control" style="width: 100px;" value="{{ $get_data->rate }}" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="status">Status *</label>
                        <select id="status" name="status" class="form-control" required style="width: 200px;">
                            <option @if(old('status') == 0 || $get_data->status == 0) selected @endif value="0">Pending</option>
                            <option @if(old('status') == 1 || $get_data->status == 1) selected @endif value="1">Active</option>
                        </select>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('status') }}
                        </div>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
