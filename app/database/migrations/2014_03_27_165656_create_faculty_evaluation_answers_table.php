<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyEvaluationAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faculty_evaluation_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->tinyInteger('evaluation_id');
			$table->tinyInteger('questions_id');
			$table->tinyInteger('student_id');
			$table->tinyInteger('answer')->nullable();
			$table->text('answer_text')->nullable();
			$table->tinyInteger('correct_flag')->nullable();
			$table->dateTime('date_answered')->nullable();
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
		Schema::drop('faculty_evaluation_answers');
	}

}
