<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAccountPasswordColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('accounts', function($table)
        {
            $table->dropColumn('password');
        });

        Schema::table('accounts', function($table)
        {
            $table->string('password')->after('email');
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
            $table->dropColumn('password');
        });

        Schema::table('accounts', function($table)
        {
            $table->string('password', 32)->after('email');
        });
	}

}
