<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendaceReportDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('attendance_report_details', function($table)
        {
            $table->increments('id');
            $table->char('is_attend', 1);
            $table->integer('people_id')->unsigned();
            $table->integer('attendance_report_id')->unsigned();
            $table->timestamps();

            $table->foreign('people_id')
                ->references('id')
                ->on('peoples');

            $table->foreign('attendance_report_id')
                ->references('id')
                ->on('attendance_reports');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('attendance_report_details');
	}

}
