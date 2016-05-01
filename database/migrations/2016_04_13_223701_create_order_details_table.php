<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDetailsTable extends Migration {

	public function up()
	{
		Schema::create('order_details', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('date', 255);
			$table->string('time', 255);
			$table->string('zip', 255);
			$table->string('how_often', 255);
			$table->string('name', 255);
			$table->integer('order_id')->unsigned()->references('id')->on('orders')->onDelete('cascade');
			$table->string('phone', 255);
			$table->string('email', 255);
			$table->text('address');
			$table->decimal('total');
		});
	}

	public function down()
	{
		Schema::drop('order_details');
	}
}