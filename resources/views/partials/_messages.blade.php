@if(Session::has('success'))

	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success')}}
	</div>

@endif

@if(Session::has('error'))

@endif