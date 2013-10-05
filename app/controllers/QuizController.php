<?php

class QuizController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$quizzes = Quiz::all();
		return View::make('home')->with('quizzes', $quizzes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quiz.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$newQuiz = array(
			'title' => Input::get('title'),
			'desc' => Input::get('desc')
		);

		$rules = array(
			'title' => 'required|min:3|max:50',
			'desc' => 'required'
		);

		$validator = Validator::make($newQuiz, $rules);

		if ( $validator->fails() ) {
			return Redirect::to('/newquiz');
		}

		// create a new Quiz model
		$quiz = new Quiz();
		$quiz->title = $newQuiz['title'];
		$quiz->desc = $newQuiz['desc'];
		$quiz->save();

		// redirect to the quiz page
		return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$quiz = Quiz::find($id);

		return View::make('quiz.summary')->with('quiz', $quiz);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}