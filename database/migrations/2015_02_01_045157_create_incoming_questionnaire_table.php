<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomingQuestionnaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incoming_questionnaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('num_courses');
			$table->string('major');
			$table->double('gpa');
			$table->integer('major_assignments');
			$table->integer('minor_assignments');
			$table->integer('exams');
			$table->enum('employment', ['no', 'paid', 'unpaid']);
			$table->integer('club_membership');
			$table->integer('hours_coursework');
			$table->integer('hours_job');
			$table->integer('hours_social_recreational');
			$table->integer('hours_family');
			$table->integer('scale_conscientious');
			$table->integer('scale_late_assignments');
			$table->integer('scale_late_appointment');
			$table->integer('scale_unexpected_events');
			$table->integer('scale_dependable');
			$table->integer('scale_schedule');
			$table->integer('scale_organized');
			$table->integer('scale_detail');
			$table->integer('certificates');
			$table->integer('susceptible_temptation');
			$table->integer('temptation_certificates');
			$table->integer('nights_year_certificates');
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
		Schema::drop('incoming_questionnaires');
	}

}
