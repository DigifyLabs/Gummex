<?php

namespace Gummex\Http\Controllers;

use Illuminate\Http\Request;

use Gummex\Http\Requests;

use Gummex\Order;

class PaypalController extends Controller
{
    //
    public function paypal($order_id)
    {
        //return $order_id;
        $order=Order::find($order_id);
        //return $order;
        return view('paypal.paypal',compact('order'));
    }


}
