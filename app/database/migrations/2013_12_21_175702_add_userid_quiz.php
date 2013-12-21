<?php

use Illuminate\Database\Migrations\Migration;

class AddUseridQuiz extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quizzes', function($table) {
			$table->integer('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quizzes', function($table) {
			$table->dropColumn('user_id');
		});
	}

}