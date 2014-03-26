<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyEvaluationSession extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faculty_evaluation_session', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_set_id');
			$table->string('title', 75);
			$table->string('description', 100);
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->integer('faculty_id');
			$table->string('SCHEIDNO', 5);
			$table->string('created_by', 50);
			$table->string('modified_by', 50);
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
		Schema::drop('faculty_evaluation_session');
	}

}
