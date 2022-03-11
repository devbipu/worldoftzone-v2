<?php 
	error_reporting(0);
?>

@extends('backend.layout.admindb')

@section('bc-title') All Reviews @endsection

@section('adminBodyContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <h3>All Reviews</h3>
                    
                    @include('backend.message')
                    
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="2%">#</th>
                          <th width="12%">Client</th>
                          <th width="35%">Review</th>
                          <th width="10%" class="text-center">rate</th>
                          <th width="5%" class="text-center">status</th>
                          <th>Created At</th>
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
                              <td>{{ $data->client_name }}</td>
                              <td><?php echo $data->review_description; ?></td>
                              <td class="text-center"><span class="btn btn-warning btn-sm"><strong>{{ number_format($data->rate) }}</strong> Star</span></td>
                              <td class="text-center">
                                  @if($data->status == 0)
                                    <span class="btn btn-warning btn-sm">Pending</span>
                                  @else
                                    <span class="btn btn-success btn-sm">Active</span>
                                  @endif
                              </td>
                              <td>{{ $data->created_at }}</td>
                              
    						    <td class="text-center">
    						        <a href="{{ url('/dashboard/reviews/edit/'.$data->id) }}" class="text-primary">Edit</a> | 
    						        <a onclick="return confirm('Do you remove this record?')" href="{{ url('/dashboard/reviews/remove/'.$data->id) }}" class="text-danger">Remove</a>
    						    </td>
                            </tr>
						    @endforeach
					    @else
					    	<tr>
					    		<td colspan="12" class="text-center">No data found</td>
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
