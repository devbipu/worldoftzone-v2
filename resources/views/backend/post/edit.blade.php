@extends('layouts.app')

@section('bc-title') Edit Post @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                @include('backend.template-parts.bc-menu')

                <div class="card-body">
                    
                    <h3>Edit Post</h3>
                    
                    @include('backend.message')
                    
                    <form method="post" action="{{ url('/dashboard/post/update/'.$get_data->id) }}" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="post_title">Post Title * </label>
                        <input type="text" class="form-control" id="post_title" name="post_title" value="{{ old('post_title') ? old('post_title') : $get_data->post_title }}" placeholder="Enter Post Title">
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('post_title') }}
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="mytextarea">Post Description * </label>
                        <textarea class="form-control" id="mytextarea"  name="post_description">{{ old('post_description') ? old('post_description') : $get_data->post_description }}</textarea>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('post_description') }}
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="meta_description">Meta Description * </label>
                        <textarea class="form-control" id="meta_description"  name="meta_description" required>{{ old('meta_description') ? old('meta_description') : $get_data->meta_description }}</textarea>
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('meta_description') }}
                        </div>
                        <p>Max lengh must be 155 => Character</p>
                      </div>

                      <div class="form-group">
                        <label for="tags">Post Tags </label>
                        <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') ? old('tags') : $get_data->tags }}" placeholder="tag one, tag two, tag tree">
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('tags') }}
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="post_image">Post Image</label>
                        <input type="file" class="form-control" id="post_image" name="post_image">
                        <div>
                            @if($get_data->post_image)
                              <img width="200" src="{{ url('/'.$get_data->post_image) }}" alt="{{ $get_data->post_title }}"/>
                              
                            @endif
                        </div>
                      
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('post_image') }}
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
