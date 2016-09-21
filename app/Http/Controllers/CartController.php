<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cart;
use App\Products;
use App\User;
use Session;

class CartController extends Controller
{
    public function index(){
    	$UserID = \Auth::user()->id;
    	$user = User::where('id', '=', $UserID)->firstOrFail();
    	$Cart = $user->UserCart;
    	return view('cart.index', compact('Cart'));
    }

    public function add(Request $request, $id){
    	//Validate the Add to cart form
    	$this->validate($request, [
    		'size' => 'required',
    		'quantity' => 'required|numeric'
    	]);

    	//Check to see if add to cart was pressed
    	if( isset($_POST['addtocart']) ){


    		$product = Products::findOrFail($id);

    		//Check to see if there is enough stock for this product
    		if($request->quantity > $product['quantity']){
    			Session::flash('LowStock', 'Sorry, there is not enough stock to process your order');
    			return redirect("/Shop/$id");
    		}

    		//Get the user Id
    		$UserID = \Auth::user()->id;
    		//Get the Subtotal
    		$Subtotal = $request->quantity * $product['price'];

    		//Change the stock of the product
    		$product->quantity = $product['quantity'] - $request->quantity;
    		$product->save();
    		
    		//Add product to cart
    		$Cart = new Cart();
    		$Cart->user_id = $UserID;
    		$Cart->product_id = $id;
    		$Cart->size = $request->size;
    		$Cart->quantity = $request->quantity;
    		$Cart->subtotal = $Subtotal;
    		$Cart->save();

    		return redirect("/Cart");








    	};














    }
}
