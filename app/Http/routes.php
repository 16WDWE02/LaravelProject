<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('Shop', 'ShopController@index');
Route::get('Shop/AddProduct', 'ShopController@add')->middleware('auth');
Route::post('submit-product', 'ShopController@submit')->middleware('auth');
Route::get('Shop/{id}', 'ShopController@show');
Route::get('Shop/Delete-Product/{id}', 'ShopController@delete')->middleware('auth');
Route::get('Shop/Edit-Product/{id}', 'ShopController@edit')->middleware('auth');
Route::post('Shop/{id}/update', 'ShopController@update')->middleware('auth');

Route::get('About', 'AboutController@index');

Route::get('Contact', 'ContactController@index');

Route::get('Cart', 'CartController@index')->middleware('auth');
Route::post('Cart/Add/{id}', 'CartController@add')->middleware('auth');
Route::get('Cart/Remove/{id}', 'CartController@remove')->middleware('auth');

Route::get('Checkout/{id}', 'CheckoutController@index')->middleware('auth');
Route::post('Checkout/{id}/Transaction', 'CheckoutController@transaction')->middleware('auth');

Route::auth();

// Route::get('/home', 'HomeController@index');
