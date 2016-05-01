<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderExtrasTable extends Migration {

	public function up()
	{
		Schema::create('order_extras', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('order_id')->unsigned()->references('id')->on('orders')->onDelete('cascade');
			$table->integer('extra_id')->unsigned()->references('id')->on('extras')->onDelete('cascade');
			$table->decimal('price');
		});
	}

	public function down()
	{
		Schema::drop('order_extras');
	}
}