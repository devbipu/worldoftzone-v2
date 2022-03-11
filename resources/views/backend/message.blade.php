<div class="message-wrapper">
	@if(Session::get('success_msg'))
		<div class="alert alert-success" role="alert">
			{{ Session::get('success_msg') }}
		</div>
	@endif
	@if(Session::get('error_msg'))
	    <div class="alert alert-danger" role="alert">
			{{ Session::get('error_msg') }}
		</div>
	@endif
</div>