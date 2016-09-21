@if(Session::has('success'))

	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success')}}
	</div>

@endif

@if(Session::has('LowStock'))
	<div class="alert alert-danger" role="alert">
		<strong>Error:</strong> {{ Session::get('LowStock')}}
	</div>
@endif