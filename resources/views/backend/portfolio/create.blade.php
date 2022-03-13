@extends('backend.layout.admindb')

@section('bc-title') Add New Portfolio @endsection

@section('admin-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <h3>Add New Portfolio</h3>
                    
                    @include('backend.message')
                    
                    <form method="post" action="{{ url('/dashboard/portfolio/save') }}" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="portfolio_title">Portfolio Title * </label>
                        <input type="text" class="form-control" id="portfolio_title" name="portfolio_title" value="{{ old('portfolio_title') }}" placeholder="Enter Portfolio Title">
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('portfolio_title') }}
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="portfolio_category">Portfolio Category * </label>
                        <select class="form-control" id="portfolio_category" name="portfolio_category">
                            <option value="">Select Category</option>
                            @foreach($categories as $key => $category)
                                <optgroup label="{{ $key }}">
                                @foreach($category as $sub_cat)
                                    <option @if(old('portfolio_category') == $sub_cat) selected @endif value="{{ $sub_cat }}">{{ $sub_cat }}</option>
                                @endforeach
                            @endforeach
                        </select>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('portfolio_category') }}
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="portfolio_link">Portfolio Link *</label>
                        <textarea class="form-control" id="portfolio_link"  name="portfolio_link" required>{{ old('portfolio_link') }}</textarea>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('portfolio_link') }}
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="portfolio_image">Portfolio Image *</label>
                        <input type="file" class="form-control" id="portfolio_image" name="portfolio_image" required>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('portfolio_image') }}
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="mytextarea">Portfolio Description </label>
                        <textarea class="form-control" id="mytextarea"  name="portfolio_description">{{ old('portfolio_description') }}</textarea>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('portfolio_description') }}
                        </div>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
