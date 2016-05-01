<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
	public $timestamps = false;
    protected $table = "payment_details";
	protected $fillable = ['status','order_id','data'];
	protected $visible = ['status','order_id','data'];

	public function order()
	{
		return $this->belongsTo('Gummex\Order');
	}

}
