<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('peoples', function($table)
        {
            $table->increments('id');
            $table->char('people_id', 36);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('address');
            $table->integer('province_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('village_id')->unsigned();
            $table->integer('account_id')->unsigned()->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities');

            $table->foreign('district_id')
                ->references('id')
                ->on('districts');

            $table->foreign('village_id')
                ->references('id')
                ->on('villages');

            $table->foreign('account_id')
                ->references('id')
                ->on('accounts');

            $table->foreign('group_id')
                ->references('id')
                ->on('groups');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('peoples');
	}

}
