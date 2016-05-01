<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->enum('status', array('created', 'pending', 'approved', 'cancelled', 'finished'));
			$table->integer('payment_method_id')->unsigned()->references('id')->on('payment_methods')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}