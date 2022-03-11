<?php 
	error_reporting(0);
?>

@extends('backend.layout.admindb')

@section('bc-title') All Pages @endsection

@section('adminBodyContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <h3>All Pages</h3>
                
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="2%">#</th>
                          <th width="10%">Page Name</th>
                          <th width="25%">Page URL</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(count($get_data) > 0)
                            <?php 
  		                        $count = 1;
  		                    ?>
		                    @foreach($get_data as $data)
                                <tr>
                                  <th>{{ $count++ }}</th>
                                  <th>{{ $data['name'] }}</th>
                                  <th><a target="_blank" href="{{ $data['url'] }}">{{ $data['url'] }}</a></th>
                                </tr>
      					    @endforeach
    					    @else
    					    	<tr>
    					    		<td colspan="12" class="text-center">No data found</td>
    					    	</tr>
    					    @endif
                      </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
