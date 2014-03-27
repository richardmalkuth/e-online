<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyEvaluationSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faculty_evaluation_sessions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_sets_id');
			$table->string('title', 75);
			$table->string('description');
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
		Schema::drop('faculty_evaluation_sessions');
	}

}
