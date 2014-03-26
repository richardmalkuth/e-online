<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionChoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_choices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_id');
			$table->string('description', 250);
			$table->tinyInteger('position');
			$table->tinyInteger('correct_flag');
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
		Schema::drop('question_choices');
	}

}
