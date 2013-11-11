<?php

class QuizControllerTest extends TestCase {

	public function __construct()
	{
		$this->mock = Mockery::mock('Eloquent', 'Quiz');
	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testIndex()
	{
		$this->mock
		->shouldReceive('all')
		->once()
		->andReturn(array());

		$this->app->instance('Quiz', $this->mock);

		$this->call('GET', 'quiz');

		$this->assertViewHas('quizzes');
	}

}