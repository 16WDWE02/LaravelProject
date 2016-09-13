@extends('master')

@section('title', 'Add new Product')
@section('description', 'We will be adding a new product')

@section('styles')
<style type="text/css">
textarea{
	resize:none;
}
</style>
@endsection

@section('content')
<h1>Add New Product</h1>

<form id="add-product" method="post" enctype="multipart/form-data" action="/submit-product">
	{!! csrf_field() !!}

	<div class="form-group {{ $errors->has('product_title') ? 'has-error' :'' }}">
		<label>Product Title</label>
		<input type="text" class="form-control" name="product_title" placeholder="Product Title" value="{{ old('product_title') }}">
		{!! $errors->first('product_title', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_description') ? 'has-error' :'' }}">
		<label>Product Description</label>
		<textarea name="product_description" class="form-control" placeholder="Product Description" rows="5">{{ old('product_description')}}</textarea>
		{!! $errors->first('product_description', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_image') ? 'has-error' :'' }}">
		<label>Image</label>
		<input class="form-control" type="file" name="product_image">
		{!! $errors->first('product_image', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_price') ? 'has-error' :'' }}">
		<label>Price</label>
		<div class="input-group">
			<div class="input-group-addon">$</div>
			<input type="text" class="form-control" name="product_price" placeholder="0.00">
		</div>
		{!! $errors->first('product_price', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_quantity') ? 'has-error' :'' }}">
		<label>Quantity</label>
		<input type="number" class="form-control" name="product_quantity" min="0">
		{!! $errors->first('product_quantity', '<span class="help-block">:message</span>') !!}
	</div>



	<div class="form-group">
		<button type="submit" class="btn btn-primary">Add Product</button>
	</div>

</form>

@endsection

@section('scripts')

@endsection