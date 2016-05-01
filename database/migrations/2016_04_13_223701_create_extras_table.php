<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExtrasTable extends Migration {

	public function up()
	{
		Schema::create('extras', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('label', 255);
			$table->decimal('price');
			$table->tinyInteger('enabled')->default('1');
			$table->text('icon');
		});
	}

	public function down()
	{
		Schema::drop('extras');
	}
}