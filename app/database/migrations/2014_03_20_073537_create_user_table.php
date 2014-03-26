<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 100);
			$table->string('password', 50);
			$table->string('user_type_code', 10)->nullable();
			$table->integer('STUDCODE')->nullable();
			$table->string('STUDIDNO', 10)->nullable();
			$table->integer('ADVICODE')->nullable();
			$table->string('ADVIIDNO', 10)->nullable();
			$table->integer('PARECODE')->nullable();
			$table->string('PAREIDNO', 10)->nullable();
			$table->string('created_by', 50)->nullable();
			$table->string('modified_by', 50)->nullable();
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
		Schema::drop('user');
	}

}
