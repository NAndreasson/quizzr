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

		$this->call('UserTableSeeder');
		$this->call('QuizTableSeeder');
		$this->call('QuestionTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create( array( 'email' => 'john@doe.com', 'password' => Hash::make('doe123') ) );
	}
}

class QuizTableSeeder extends Seeder {

	public function run()
	{
		DB::table('quizzes')->delete();

		$user = User::first();

		Quiz::create( array( 'user_id' => $user->id, 'title' => 'Heroes', 'desc' => 'Time to prove what you know about heroes!', 'status' => 'unpublished') );
	}

}

class QuestionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('questions')->delete();

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