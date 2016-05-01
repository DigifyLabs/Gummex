<?php

namespace Gummex\Http\Controllers;

use Illuminate\Http\Request;

use Gummex\Http\Requests;

use Gummex\Order;

class PaypalController extends Controller
{
    //
    public function paypal(Request $request)
    {
        $order_id = $request->get('order_id');
        //return $order_id;
        $order=Order::find($order_id);
        //return $order;
        return view('paypal.paypal',compact('order'));
    }


}
