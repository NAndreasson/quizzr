<?php

class QuizController extends BaseController {

	public function showSummary($id)
	{
			$quiz = Quiz::find($id);

			return View::make('quiz.summary')->with('quiz', $quiz);
	}

	public function showQuestion($id, $questionId)
	{
			$question = Question::find($questionId);

			return View::make('quiz.question')->with('question', $question);
	}

	public function newQuiz()
	{
		return View::make('quiz.new');
	}

}