@extends('master')

@section('title', 'Shop')
@section('description', 'This is our shop page')

@section('styles')

@endsection

@section('content')
<h1>This is our Shop Page</h1>

<p><a href="/Shop/AddProduct" class="btn btn-primary">Add New Product</a></p>

<?php if(count($AllProducts) > 0): ?>
	<?php foreach($AllProducts as $product): ?>
		<div class="col-sm-4 col-xs-12">
			<a href="">
				<div class="thumbnail">
					<h3>{{$product->title}}</h3>
					<p>{{$product->description}}</p>
					<img class="img-responsive" src="images/Products/{{$product->image}}">
				</div>
			</a>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<p>There are no products in the database</p>
<?php endif; ?>

@endsection

@section('scripts')

@endsection