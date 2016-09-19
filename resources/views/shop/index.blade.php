@extends('master')

@section('title', 'Shop')
@section('description', 'This is our shop page')

@section('styles')

@endsection

@section('content')
<h1>This is our Shop Page</h1>

<p><a href="/Shop/AddProduct" class="btn btn-primary">Add New Product</a></p>

<div class="col-xs-12">
	{!! $AllProducts->links() !!}
</div>

<?php if(count($AllProducts) > 0): ?>
	@foreach($AllProducts->chunk(3) as $productRow)
		<div class="row">
			<?php foreach($productRow as $product): ?>
				<div class="col-sm-4 col-xs-12">
					<a href="Shop/{{$product->id}}">
						<div class="thumbnail">
							<h3>{{$product->title}}</h3>
							<p>${{$product->price}}</p>
							<img class="img-responsive" src="/images/Products/{{$product->image}}">
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	@endforeach



<?php else: ?>
	<p>There are no products in the database</p>
<?php endif; ?>

@endsection

@section('scripts')

@endsection