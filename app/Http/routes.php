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

Route::get('sendemail', function () {

    // $data = array(
    //     'name' => "gummex test",
    // );
		//
    // Mail::send('emails.welcome', $data, function ($message) {
		//
    //     $message->from('info@gummex.com', 'Gummex');
		//
    //     $message->to('emadelmogy619@gmail.com')->subject('gummex test email1');
		//
    // });
		$order= Order::find(1);
	 echo	$order->sendInvoice();

    // return "Your email has been sent successfully";

});

//Admin Routes
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'OrdersController@index')->name('listOrders');
	Route::get('/orders/{id}','OrdersController@viewOrder')->name('viewOrder');
});

//API
Route::post('/api/v/0.1/orders', 'WSController@saveOrder');
