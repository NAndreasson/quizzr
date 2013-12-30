<?php

class QuizQuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($quizId)
	{
		$quiz = Quiz::find( $quizId );

		return View::make('quiz.questions')->with( 'quiz', $quiz );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($quizId)
	{
		$quiz = Quiz::find($quizId);

		return View::make('quiz.newquestion')->with('quiz', $quiz);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($quizId)
	{
		$newQuestion = array(
			'title' => Input::get('title'),
			'question' => Input::get('question')
		);

		$rules = array(
			'title' => 'required|min:3|max:50',
			'question' => 'required'
		);

		$quizValidator = Validator::make($newQuestion, $rules);

		// create to alternatives

		// rules

		if ( $quizValidator->fails() ) {
			return Redirect::to('/quiz/' . $quizId);
		}

		// create a new Quiz model
		$question = new Question();
		$question->title = $newQuestion['title'];
		$question->question = $newQuestion['question'];
		$question->quiz_id = $quizId;
		$question->save();

		// get all the answer alternatives

			// create a model for each and every one of them

			// save
		$answerAlternative = new AnswerAlternative();

		// redirect to the quiz page
		return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($quizId, $questionId)
	{
		$question = Question::find( $questionId );

		return View::make('quiz.question')->with('question', $question);
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