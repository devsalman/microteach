<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessControlsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('access_controls', function($table)
        {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->timestamps();

            $table->foreign('role_id')
                ->references('id')
                ->on('account_roles');

            $table->foreign('menu_id')
                ->references('id')
                ->on('app_menus');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('access_controls');
	}

}
