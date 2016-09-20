@extends('master')

@section('title', 'Edit Product')
@section('description', 'Editing Product')

@section('styles')
{{-- This is where you will write css --}}
@endsection

@section('content')

{!! Form::model($product, ['action' => ['ShopController@update', $product->id], 'files' => true ]) !!}

<div class="col-xs-12">
	<p>
		<a class="btn btn-danger" href="/Shop/{{$product->id}}">Cancel</a>
		{{ FORM::submit('Save Changes', ["class" => 'btn btn-success'])}}
	</p>
</div>

<div class="col-md-6 col-xs-12">
	<img class="img-responsive" src="/images/Products/{{$product->image}}">
	<div class="form-group">
		{{ FORM::label('image', 'Choose an Image:')}}
		{{ FORM::file('image', ["class" => 'form-control'])}}
	</div>
</div>
<div class="col-md-6 col-xs-12">
	<div class="form-group">
		{{ FORM::label('title', 'Product Ttile:')}}
		{{ FORM::text('title', null, ["class" => 'form-control input-lg']) }}
	</div>
	<div class="form-group">
		{{ FORM::label('price', 'Product Price:')}}
		{{ FORM::number('price', null, ["class" => 'form-control'])}}
	</div>
	<div class="form-group">
		{{ FORM::label('description', 'Product Description:')}}
		{{ FORM::textarea('description', null, ["class" => 'form-control'])}}
	</div>
	<div class="form-group">
		{{ FORM::label('quantity', 'Quantity:')}}
		{{ FORM::number('quantity', null, ["class" => 'form-control'])}}
	</div>

</div>

{!! Form::close() !!}
@endsection

@section('scripts')
{{-- This is where you write your js --}}
@endsection