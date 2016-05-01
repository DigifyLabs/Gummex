<?php

namespace Gummex\Http\Controllers;

use Gummex\Order;
use Illuminate\Http\Request;

use Gummex\Http\Requests;

class OrdersController extends Controller
{
	/**
	 * @return mixed
	 */
	public function index()
	{
		$orders = Order::orderBy('created_at', 'DESC')->get();
		return view('orders.index', compact('orders'));
	}

	public function viewOrder($id)
	{
		$order = Order::find($id);
		return view('orders.view', compact('order', 'payment_details'));
	}
}
