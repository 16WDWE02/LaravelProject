<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Orders;
use App\Cart;
use App\Orders_Products;
use Braintree_Configuration;
use Braintree_ClientToken;
use Braintree_Transaction;
use Session;

Braintree_Configuration::environment(env('BRAINTREE_ENV'));
Braintree_Configuration::merchantId(env('BRAINTREE_MERCHANTID'));
Braintree_Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
Braintree_Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));

class CheckoutController extends Controller
{
    public function index($id){
    	$user = User::where('id', '=', $id)->firstOrFail();
    	$Cart = $user->UserCart;
    	$Grandtotal = $user->UserCart->sum('subtotal');
    	return view('checkout.index', compact('Cart', 'Grandtotal'));
    }

    public function transaction($id){
    	$clientToken = Braintree_ClientToken::generate();
    	$user = User::where('id', '=', $id)->firstOrFail();
    	$UserCart = $user->UserCart;
    	$Grandtotal = $user->UserCart->sum('subtotal');

    	$nonce = $_POST['payment_method_nonce'];

    	$result = Braintree_Transaction::sale([
    		'amount' => $Grandtotal,
    		'paymentMethodNonce' => 'fake-valid-nonce',
    		'options' => [
    			'submitForSettlement' => true
    		]
    	]);

    	if($result->success){
    		$settledTransaction = $result->transaction;
    		
    		//Add new Order
    		$order = new Orders();
    		$order->user_id = $id;
    		$order->grandtotal = $Grandtotal;
    		$order->save();
    		$order_ID = $order->id;
    		foreach($UserCart as $CartItem){
    			$order_product = new Orders_Products();
    			$order_product->order_id = $order_ID;
    			$order_product->product_id = $CartItem->product_id;
    			$order_product->quantity = $CartItem->quantity;
    			$order_product->size = $CartItem->size;
    			$order_product->subtotal = $CartItem->subtotal;
    			$order_product->save();

    			$CartItem->delete();
    		}
    		Session::flash('PaymentSuccess', 'Thank you for your transaction');
    		return redirect('/');

    	} else{
    		print_r($result->errors);
    	}
    }
}
