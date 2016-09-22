@extends('master')

@section('title', 'Checkout')
@section('description', 'Checkout Page')

@section('styles')
{{-- This is where you will write css --}}
@endsection

@section('content')
{{-- This is where you write your html/php --}}
<div class="col-xs-12">
	<h1>Checkout For {{ \Auth::user()->name }}</h1>

	@if(count($Cart) > 0)
		<table class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:50%">Product</th>
					<th style="width:20%">Price</th>
					<th style="width:10%">Quantity</th>
					<th style="width:20%">Subtotal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Cart as $CartRow)
					<tr>
						<td><a href="/Shop/{{$CartRow->product_id}}">{{ $CartRow->product->title }}</a> - Size {{ $CartRow->size }}</td>
						<td>${{ $CartRow->product->price }}</td>
						<td>{{ $CartRow->quantity }}</td>
						<td>${{ $CartRow->subtotal }}</td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td><strong>Grandtotal</strong></td>
					<td><strong>$ {{ $Grandtotal }}</strong></td>
				</tr>
			</tbody>
		</table>
	@endif

	<form id="checkout" method="post" action="/Checkout/{{ \Auth::user()->id }}/Transaction">
  		{!! csrf_field() !!}
  		<div id="payment-form"></div>
  		<button type="submit" class=" btn btn-success">
  			Pay Now
  		</button>
	</form>

</div>
@endsection

@section('scripts')
{{-- This is where you write your js --}}
<script src="https://js.braintreegateway.com/js/braintree-2.29.0.min.js"></script>
<script>
// We generated a client token for you so you can test out this code
// immediately. In a production-ready integration, you will need to
// generate a client token on your server (see section below).

var clientToken = "<?php echo($clientToken = Braintree_ClientToken::generate()); ?>"
braintree.setup(clientToken, "dropin", {
  container: "payment-form"
});
</script>
@endsection