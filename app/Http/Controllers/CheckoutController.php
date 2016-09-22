<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Braintree_Configuration;
use Braintree_ClientToken;
use Braintree_Transaction;

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
}
