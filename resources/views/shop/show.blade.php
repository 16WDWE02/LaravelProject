@extends('master')

@section('title', 'Single Product')
@section('description', 'This is a single Product')

@section('styles')
{{-- This is where you will write css --}}
@endsection

@section('content')
<div class="col-xs-12">
	<p>
		<a class="btn btn-primary" href="Edit-Product/{{$product->id}}">Edit Product</a>
		<a class="btn btn-danger" href="Delete-Product/{{$product->id}}">Delete Product</a>
	</p>
</div>

<div class="col-md-6 col-xs-12">
	<img class="img-responsive" src="/images/Products/{{$product->image}}">
</div>
<div class="col-md-6 col-xs-12">
	<h1>{{$product->title}}</h1>
	<h2>${{$product->price}}</h2>
	<p>{{$product->description}}</p>

	<form action="" method="post">
		<div class="form-group">
			<select name="size" class="form-control">
				<option value="">Choose a Size</option>
				<option value="xs">Extra Small</option>
				<option value="sm">Small</option>
				<option value="md">Medium</option>
				<option value="lg">Large</option>
				<option value="xl">Extra Large</option>
			</select>
		</div>
		<div class="form-group">
			<input class="form-control" type="number" name="quantity" min="0" max="10">
		</div>

		<button class="btn btn-primary" type="submit">Add to cart</button>
	</form>

</div>

@endsection

@section('scripts')
{{-- This is where you write your js --}}
@endsection