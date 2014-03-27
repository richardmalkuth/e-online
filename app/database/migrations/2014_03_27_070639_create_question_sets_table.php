<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionSetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_sets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->string('description');
			$table->tinyInteger('time_per_question')->default(0);
			$table->tinyInteger('is_delete')->nullable();
			$table->string('created_by', 50);
			$table->string('updated_by', 50);
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
		Schema::drop('question_sets');
	}

}
