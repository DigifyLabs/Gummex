<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model {

	protected $table = 'order_details';
	public $timestamps = true;
	protected $fillable = ['date', 'time', 'zip', 'how_often', 'name', 'order_id', 'phone', 'email', 'address',
	                       'total'];
	protected $visible = ['date', 'time', 'zip', 'how_often', 'name', 'order_id', 'phone', 'email', 'address',
	                      'total'];

	public function order()
	{
		return $this->belongsTo('Gummex\Order');
	}

}