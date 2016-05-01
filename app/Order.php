<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $table = 'orders';
	public $timestamps = true;
	protected $fillable = ['status', 'payment_method_id'];
	protected $visible = ['status', 'payment_method_id'];

	public function order_details()
	{
		return $this->hasOne('Gummex\OrderDetails');
	}

	public function extras()
	{
		return $this->belongsToMany('Gummex\Extra', 'order_extras');
	}

	public function payment_method()
	{
		return $this->belongsTo('Gummex\PaymentMethod');
	}

	public function payment_details()
	{
		return $this->hasOne('Gummex\PaymentDetails');
	}
	public function store($data)
	{
		// Make sure the order is saved
		if($this->save())
		{
			// save order details
			$data['order_id'] = $this->id;
			$details = new OrderDetails($data);
			$details->save();

			// get extras and attach it to order
			if(array_key_exists('extras',$data))
			{
				$extras = $data['extras'];
				foreach($extras as $extra_id => $price)
				{
					$this->extras()->attach($extra_id, ['price'=>$price]);
				}
			}

			// determine and save payment details

			//if($this->payment_method->gateway === 0)
			{
				// payment details should be saved on our side
				$payment_details = new PaymentDetails(
					[
						'order_id' => $this->id,
						'status' => 'pending',
						'data'   => json_encode($data['payment_details'])
					]
				);
				if(!$payment_details->save())
					return response()->json(['status'=>false,'errors'=>$payment_details->errors()]);
			}

			return response()->json(['status'=>true,'order_id'=>$data['payment_details']]);
		}
		else
		{
			return response()->json(['status'=>false,'errors'=>$this->errors()]);
		}
	}
}