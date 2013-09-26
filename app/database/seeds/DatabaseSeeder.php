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
		$this->call('QuestionTableSeeder');
	}

}

class QuizTableSeeder extends Seeder {

	public function run() {
		DB::table('quizzes')->delete();

		Quiz::create( array( 'title' => 'Heroes', 'desc' => 'Time to prove what you know about heroes!', 'status' => 'unpublished') );
	}

}

class QuestionTableSeeder extends Seeder {

	public function run() {
		$quiz = Quiz::first();

		Question::create(
			array(
				'title' => 'Dead Presidents',
				'question' => 'Who killed Kennedy?',
				'quiz_id' => $quiz->id
			)
		);
	}
}