<?php

use Gummex\OrderDetails ;
use Gummex\Order ;
use Gummex\Booking ;
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
	$getall=  Booking::getcodes();
	return view('webapp.index',['getall'=>$getall]);
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


Route::get('/booking/all', 'BookingController@showAllcodes')->name('bookingall');

Route::get('/booking/add', 'BookingController@showAddcodes')->name('bookingadd');
Route::post('/booking/add', 'BookingController@doAddcodes');

Route::get('/booking/import', 'BookingController@showImport')->name('bookingimport');
Route::post('/booking/import', 'BookingController@doImport');

Route::get('/booking/edit/{id}','BookingController@showEdit')->name('edit');
Route::post('/booking/edit/{id}','BookingController@doEdit');
Route::get('/booking/delete/{id}','BookingController@showDelete')->name('delete');



//API
Route::post('/api/v/0.1/orders', 'WSController@saveOrder');


