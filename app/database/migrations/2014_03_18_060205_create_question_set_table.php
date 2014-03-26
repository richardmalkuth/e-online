<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_set', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->string('description', 250);
			$table->integer('timePerQuestion');
			$table->tinyInteger('is_delete');
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
		Schema::drop('question_set');
	}

}
