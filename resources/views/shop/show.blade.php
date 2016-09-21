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

	<form action="/Cart/Add/{{$product->id}}" method="post">
		{!! csrf_field() !!}

		<div class="form-group {{ $errors->has('size') ? 'has-error' :'' }}">
			<select name="size" class="form-control">
				<option value="">Choose a Size</option>
				<option value="xs"<?php if(old('size') == 'xs'): ?>selected<?php endif;?>>Extra Small</option>
				<option value="sm"<?php if(old('size') == 'sm'): ?>selected<?php endif;?>>Small</option>
				<option value="md"<?php if(old('size') == 'md'): ?>selected<?php endif;?>>Medium</option>
				<option value="lg"<?php if(old('size') == 'lg'): ?>selected<?php endif;?>>Large</option>
				<option value="xl"<?php if(old('size') == 'xl'): ?>selected<?php endif;?>>Extra Large</option>
			</select>
			{!! $errors->first('size', '<span class="help-block">:message</span>')!!}
		</div>
		<div class="form-group {{ $errors->has('quantity') ? 'has-error' :'' }}">
			<input class="form-control" type="number" name="quantity" min="0" max="10" value="{{ old('quantity') }}">
			{!! $errors->first('quantity', '<span class="help-block">:message</span>')!!}
		</div>

		<button class="btn btn-primary" type="submit" name="addtocart">Add to cart</button>
	</form>

</div>

@endsection

@section('scripts')
{{-- This is where you write your js --}}
@endsection