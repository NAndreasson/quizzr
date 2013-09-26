<?php

use Illuminate\Database\Migrations\Migration;

class AddStatusToQuizTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	 	Schema::table('quizzes', function($table) {
	 		$table->enum('status', array('open', 'closed', 'unpublished'));
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
			$table->dropColumn('status');
		});

	}

}