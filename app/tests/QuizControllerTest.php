<?php

class QuizControllerTest extends TestCase {

	public function __construct()
	{
		$this->userMock = Mockery::mock('Eloquent', 'User');

	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testIndex()
	{
		$this->userMock->quizzes = array();

		Auth::shouldReceive('User')->once()->andReturn($this->userMock);

		$this->call('GET', 'quiz');

		$this->assertViewHas('quizzes');
	}

}