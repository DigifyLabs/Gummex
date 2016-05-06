<?php

namespace Gummex\Http\Controllers;

use Illuminate\Http\Request;

use Gummex\Http\Requests;

use Gummex\Order;
use Fahim\PaypalIPN\PaypalIPNListener;

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

    public function paypalIpn(Request $request)
    {

        $ipn = new PaypalIPNListener();
        $ipn->use_sandbox = true;



        $report = $ipn->getTextReport();
        //send report to mail
        \Mail::send('emails.paypal', ['report' => var_export($request->all(),true)], function ($m) {
            $m->from('sherifmesallam@gmail.com', 'Hatem php');

            $m->to('sherifmesallam@gmail.com')->subject('Paypalreport!');
        });

        $verified = $ipn->processIpn();
        \Log::info("-----new payment-----");

        \Log::info($report);

        if ($verified) {
                // Check outh POST variable and insert your logic here
                \Log::info("payment verified and inserted to db");
                $order_id = $request->custom;
                $order=Order::find($order_id);
                return "Payment Done";
        } else {
            \Log::info("Some thing went wrong in the payment !");
        }
    }


}
