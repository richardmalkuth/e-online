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
			$table->integer('evaluation_id');
			$table->integer('question_id');
			$table->integer('student_id');
			$table->integer('answer');
			$table->text('answer_text');
			$table->tinyInteger('correct_flag');
			$table->dateTime('date_answered');
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
