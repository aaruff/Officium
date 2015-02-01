<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledEventDatetimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scheduled_event_date_times', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('questionnaire_id')->unsigned();
			$table->foreign('questionnaire_id')->references('id')->on('incoming_questionnaire');
			$table->enum('type', ['work', 'recreation', 'family']);
			$table->dateTime('date_time');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scheduled_event_date_times');
	}

}
