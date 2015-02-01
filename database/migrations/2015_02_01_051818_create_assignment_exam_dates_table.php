<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentExamDatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignment_exam_dates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('questionnaire_id')->unsigned();
			$table->foreign('questionnaire_id')->references('id')->on('incoming_questionnaire');
			$table->enum('type', ['exam', 'major_assignment', 'minor_assignment']);
			$table->date('deadline');
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
		Schema::drop('assignment_exam_dates');
	}

}
