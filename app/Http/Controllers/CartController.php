<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    public function index(){
    	return view('cart.index');
    }

    public function add(Request $request, $id){
    	$this->validate($request, [
    		'size' => 'required',
    		'quantity' => 'required|numeric'
    	]);
    }
}
