<?php

use Illuminate\Database\Migrations\Migration;

class CreateQuizzes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quizzes', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('desc');
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
		Schema::drop('quizzes');
	}

}