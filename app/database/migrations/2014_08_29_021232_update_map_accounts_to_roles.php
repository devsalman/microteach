<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMapAccountsToRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('accounts', function($table)
        {
            $table->integer('role_id')
                ->unsigned()
                ->after('account_id');

            $table->foreign('role_id')
                ->references('id')
                ->on('account_roles');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('accounts', function($table)
        {
            $table->dropColumn('role_id');
        });
	}

}
