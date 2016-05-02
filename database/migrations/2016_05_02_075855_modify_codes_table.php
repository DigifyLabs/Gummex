<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::drop('codes');

        Schema::create('codes', function($table)
        {
            $table->increments('id');
            $table->string('code');
            $table->text('price');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('codes');
        Schema::create('codes', function($table)
        {
            $table->increments('id');
            $table->integer('code');
            $table->text('price');
        });

    }
}
