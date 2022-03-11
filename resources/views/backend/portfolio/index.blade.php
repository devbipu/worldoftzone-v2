@extends('backend.layout.admindb')

@section('bc-title') All Portfolio @endsection



@section('adminBodyContent')

	<h3>All portfolio here</h3>


	{{-- Data insert modal --}}


		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" id="modalshow">
		  Add Portfolio
		</button>

		<!-- Modal -->

	<form id="portfolios_form" >
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Portfolio</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				  <div class="form-row">
				    <div class="col-6 my-2">
				      <input type="text" name="title" class="form-control" placeholder="Project Title">
				    </div>
				    <div class="col-6 my-2">
				      <input type="text" name="project_cat" class="form-control" placeholder="Project Category">
				    </div>
				    <div class="col-6 my-2">
				      <input type="text" name="project_type" class="form-control" placeholder="Project Type">
				    </div>
				    <div class="col-6 my-2">
				      <input type="text" name="project_img" class="form-control" placeholder="Project Image url">
				    </div>
				    <div class="col-6 my-2">
				      <input type="text" class="form-control" name="project_url" placeholder="Project url">
				    </div>
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>

@endsection



@section('admin-js')
	<script type="text/javascript">
		$(document).ready(function(){
			var btn = $('#modalshow');

			$('#modalshow').click(function() {
				$("#exampleModal").modal("show");
				// alert("ok")
				console.log("Ok")
			})



			$("#portfolios_form").submit(function( event ) {
			  // alert( "Handler for .submit() called." );
			  event.preventDefault();
			  var allData = $(this).serialize();
			  // alert("Submited")
			  console.log(allData.title);
			});
		})
	</script>
@endsection
