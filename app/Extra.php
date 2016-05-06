<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model {

	protected $table = 'extras';
	public $timestamps = true;
	protected $fillable = ['label', 'price', 'enabled', 'icon'];
	protected $visible = ['label', 'price', 'enabled', 'icon'];

	/**
	 * Statically retrieve all extras
	 * 
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public static function getExtras()
	{
		return (Extra::all());
	}
	

	/**
	 * Relation with orders declaration
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function orders()
	{
		return $this->belongsToMany('Gummex\Order', 'order_extras');
	}
}