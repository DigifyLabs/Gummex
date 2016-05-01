<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model {

	protected $table = 'extras';
	public $timestamps = true;
	protected $fillable = ['label', 'price', 'enabled', 'icon'];
	protected $visible = ['label', 'price', 'enabled', 'icon'];

	public function orders()
	{
		return $this->belongsToMany('Gummex\Order', 'order_extras');
	}
}