<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('QuizTableSeeder');
	}

}

class QuizTableSeeder extends Seeder {

	public function run() {
		DB::table('quizzes')->delete();

		Quiz::create( array( 'title' => 'Heroes', 'desc' => 'Time to prove what you know about heroes!' ) );
	}
}