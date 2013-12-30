<?php

class UserControllerTest extends TestCase {

	public function __construct()
	{
		$this->userMock = Mockery::mock('Eloquent', 'User');
	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testPostCreate()
	{
		$input = array(
			'email' => 'john@doe.com',
			'password' => 'doe123'
		);

		$this->userMock
			 ->shouldReceive('create')
			 ->once()
			 ->with($input);

	 	$this->app->instance('User', $this->userMock);

	 	$this->call('POST', 'register', $input);

	 	$this->assertRedirectedTo('/');

	}

	public function testPostSignin()
	{

	}
}