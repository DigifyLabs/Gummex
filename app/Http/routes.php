<?php

use Gummex\OrderDetails ;
use Gummex\Order ;

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
	return view('webapp.index');
});

//Admin Routes
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'OrdersController@index')->name('listOrders');
	Route::get('/orders/{id}','OrdersController@viewOrder')->name('viewOrder');

	// Extras Routes
	Route::get('/extras', 'ExtrasController@index')->name('listExtras');

	Route::get('/extras/create', 'ExtrasController@createExtra')->name('createExtra');
	Route::post('/extras/create', 'ExtrasController@storeExtra')->name('storeExtra');
	
	Route::get('/extras/edit/{id}', 'ExtrasController@editExtra')->name('editExtra');
	Route::post('/extras/edit/{id}', 'ExtrasController@updateExtra')->name('updateExtra');

	Route::get('/extras/delete/{id}', 'ExtrasController@deleteExtra')->name('deleteExtra');

	Route::get('/extras/view/{id}', 'ExtrasController@view')->name('viewExtras');
});

//API
Route::post('/api/v/0.1/orders', 'WSController@saveOrder');
