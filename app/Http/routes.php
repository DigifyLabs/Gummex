<?php

use Gummex\Extra;
use Gummex\OrderDetails ;
use Gummex\Order ;
use Gummex\PostCode ;
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

// Web App route
Route::get('booking',function(){
	$codes =  PostCode::getcodes();
	$extras = Extra::getExtras();
	return view('webapp.index',compact('codes', 'extras'));
});

Route::get('/test', function(){
	$order = Order::first();
	dd($order->sendInvoice());
});
//Admin Routes
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'OrdersController@index')->name('listOrders');
	Route::get('/orders/{id}','OrdersController@viewOrder')->name('viewOrder');

	Route::get('/extras', 'ExtrasController@index')->name('listExtras');

	Route::get('/extras/create', 'ExtrasController@createExtra')->name('createExtra');
	Route::post('/extras/create', 'ExtrasController@storeExtra')->name('storeExtra');
	
	Route::get('/extras/edit/{id}', 'ExtrasController@editExtra')->name('editExtra');
	Route::post('/extras/edit/{id}', 'ExtrasController@updateExtra')->name('updateExtra');

	Route::get('/extras/delete/{id}', 'ExtrasController@deleteExtra')->name('deleteExtra');

	Route::get('/extras/view/{id}', 'ExtrasController@view')->name('viewExtras');

	Route::get('/codes/all', 'PostCodesController@showAllcodes')->name('bookingall');

	Route::get('/codes/add', 'PostCodesController@showAddcodes')->name('bookingadd');
	Route::post('/codes/add', 'PostCodesController@doAddcodes');

	Route::get('/codes/import', 'PostCodesController@showImport')->name('bookingimport');
	Route::post('/codes/import', 'PostCodesController@doImport');

	Route::get('/codes/edit/{id}','PostCodesController@showEdit')->name('edit');
	Route::post('/codes/edit/{id}','PostCodesController@doEdit');
	Route::get('/codes/delete/{id}','PostCodesController@showDelete')->name('delete');
});


//API
Route::post('/api/v/0.1/orders', 'WSController@saveOrder')->name('APISaveOrder');

Route::get('/paypal','PaypalController@paypal')->name('paypal');

