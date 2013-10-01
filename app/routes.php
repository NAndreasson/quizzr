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
	$quizzes = Quiz::all();
	return View::make('home')->with('quizzes', $quizzes);
});

Route::get('/quiz/{id}', 'QuizController@showSummary');

Route::get('/quiz/{id}/questions/{questionId}', 'QuizController@showQuestion');

Route::post('/addquestion', 'QuizController@createNewQuestion');

Route::post('/quiz', 'QuizController@createQuiz');

Route::get('/newquiz', 'QuizController@showNewQuizForm');

Route::get('/account', function() {
	return View::make('account');
});