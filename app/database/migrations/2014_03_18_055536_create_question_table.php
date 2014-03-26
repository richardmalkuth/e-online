<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_set_id');
			$table->integer('classification_id');
			$table->integer('category_id');
			$table->string('description', 250);
			$table->tinyInteger('order_position');
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
		Schema::drop('question');
	}

}
