<?php

class Quiz extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'quizzes';

	public function questions() {
		return $this->hasMany('Question');
	}
}