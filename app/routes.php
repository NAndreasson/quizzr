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

Route::get('/quiz/{id}', function($id) {
	$quiz = Quiz::find($id);
	return View::make('quiz.summary')->with('quiz', $quiz);
});

Route::get('/account', function() {
	return View::make('account');
});