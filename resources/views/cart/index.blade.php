@extends('master')

@section('title', 'Cart')
@section('description', 'This is the cart page')

@section('styles')

@endsection

@section('content')
	<h1>This is the Shopping Cart for {{ \Auth::user()->name }}</h1>

	@if(count($Cart) > 0)
		<table class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:50%">Product</th>
					<th style="width:10%">Price</th>
					<th style="width:10%">Quantity</th>
					<th style="width:20%">Subtotal</th>
					<th style="width:10%"></th>
				</tr>
			</thead>
			<tbody>

			</tbody>
			<tfoot>
				<tr>
					<td>Continue Shoping</td>
					<td></td>
					<td></td>
					<td></td>
					<td>Checkout</td>
				</tr>
			</tfoot>
		</table>
	@else
		<p>Your Shopping Cart is Empty!</p>
	@endif

@endsection

@section('scripts')

@endsection