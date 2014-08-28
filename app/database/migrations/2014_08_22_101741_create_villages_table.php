<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('villages', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('district_id')->unsigned();
            $table->timestamps();

            $table->foreign('district_id')
                ->references('id')
                ->on('districts');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('villages');
	}

}
