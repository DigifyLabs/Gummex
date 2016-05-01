<?php

namespace Gummex\Http\Controllers;

use Illuminate\Http\Request;

use Gummex\Http\Requests;

use Gummex\Order;
use Gummex\OrderDetails;
use Gummex\PaymentMethod;
use Gummex\Extra;

use Gummex\Http\Requests\CreateOrderRequest;

class WSController extends Controller
{
    public function saveOrder( CreateOrderRequest $request )
    {
		$order = new Order($request->all());
	    return $order->store($request->all());
    }
}
