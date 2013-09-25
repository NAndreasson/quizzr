<?php

class Question extends Eloquent {

	public function quiz()
	{
		return $this->belongsTo('Quiz');
	}

}