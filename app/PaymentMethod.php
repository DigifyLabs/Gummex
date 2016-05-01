<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model {

	protected $table = 'payment_methods';
	public $timestamps = true;
	protected $fillable = ['label', 'gateway', 'enabled'];
	protected $visible = ['label', 'gateway', 'enabled'];

	public function orders()
	{
		return $this->hasMany('Gummex\Order');
	}

}