<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	// $quizzes = Quiz::all();
	return View::make('login');
	// return Redirect::to('/quiz');
});

Route::get('/register', function() {
	return View::make('register');
});

Route::post('/register', 'UserController@postCreate');

Route::post('/login', 'UserController@postSignin');

Route::group(array( 'before' => 'auth' ), function() {

	Route::resource('quiz', 'QuizController');

	Route::resource('quiz.questions', 'QuizQuestionsController');

	Route::get('/account', function() {
		return View::make('account');
	});

});

Route::filter('auth', function() {
	if ( Auth::guest() ) return Redirect::guest('/');
});

// Route::get('/quiz/{id}', 'QuizController@showSummary');

// Route::get('/quiz/{id}/questions/{questionId}', 'QuizController@showQuestion');

// Route::post('/addquestion', 'QuizController@createNewQuestion');

// Route::post('/quiz', 'QuizController@createQuiz');

// Route::get('/newquiz', 'QuizController@showNewQuizForm');
