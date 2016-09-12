<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function index(){
    	return view('shop.index');
    }

    public function add(){
    	return view('shop.add');
    }

    public function submit(Request $request){
    	$this->validate($request,[
    		'product_title'=>'required|min:1|max:255',
    		'product_description'=>'required|min:10',
    	]);
    }
}
