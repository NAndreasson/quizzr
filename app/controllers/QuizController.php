<?php

class QuizController extends BaseController {

	public function showSummary($id)
	{
		$quiz = Quiz::find($id);

		return View::make('quiz.summary')->with('quiz', $quiz);
	}

	public function showQuestion($id, $questionId)
	{
		$question = Question::find( $questionId );

		return View::make('quiz.question')->with('question', $question);
	}

	public function showNewQuizForm()
	{
		return View::make('quiz.new');
	}

	public function createQuiz()
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

	public function showNewQuestionForm()
	{
		return View::make('quiz.newquestion');
	}

}