<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresetChoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preset_choices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->tinyInteger('presets_id');
			$table->string('description');
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
		Schema::drop('preset_choices');
	}

}
