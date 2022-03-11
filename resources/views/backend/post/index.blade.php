<?php 
	error_reporting(0);
?>

@extends('backend.layout.admindb')

@section('bc-title') All Posts @endsection

@section('adminBodyContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                    
                    <h3>All Posts</h3>
                    
                    @include('backend.message')
                    
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="2%">#</th>
                          <th width="5%">Image</th>
                          <th width="25%">Title</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if($get_data->count())
                            <?php 
		                        $count = ($get_data->currentpage() - 1) * $get_data->perpage() + 1;
		                    ?>
		                    @foreach($get_data as $data)
                            <tr>
                              <th>{{ $count++ }}</th>
                              <td>
                                  @if($data->post_image)
                                  <img width="70" src="{{ url('/'.$data->post_image) }}" alt="{{ $data->post_title }}"/>
                                  @else
                                    -
                                  @endif
                              </td>
                              <td><a target="_blank" href="{{ url('/blog/'.$data->post_slug) }}">{{ $data->post_title }}</a></td>
                              <td>{{ $data->created_at }}</td>
                              <td>{{ $data->updated_at }}</td>
                              
    						    <td class="text-center">
    						        <a href="{{ url('/dashboard/post/edit/'.$data->id) }}" class="text-primary">Edit</a> | 
    						        <a onclick="return confirm('Do you remove this record?')" href="{{ url('/dashboard/post/remove/'.$data->id) }}" class="text-danger">Remove</a>
    						    </td>
                            </tr>
						    @endforeach
					    @else
					    	<tr>
					    		<td colspan="12" class="text-center">'No data found</td>
					    	</tr>
					    @endif
                      </tbody>
                    </table>
                    
	            	<div class="table_footer">
        			    {{ $get_data->withQueryString()->links() }}
	            	</div>

                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
