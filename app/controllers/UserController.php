<?php

class UserController extends BaseController {

	public function __construct(User $user)
	{
		$this->user = $user;
	}


	public function postCreate()
	{
		$validator = Validator::make( Input::all(), User::$rules );

   		if ( $validator->passes() ) {
			$user = new User();
   			$user->email = Input::get('email');
   			$user->password = Hash::make( Input::get('password') );
   			$user->save();
   		} else {
      		// validation has failed, display error messages
   		}

   		return Redirect::to('/');
	}

	public function postSignin()
	{
		$userCredentials = Input::only('email', 'password');

		if ( Auth::attempt( $userCredentials ) ) {
			return Redirect::intended('/quiz');
		}
		return Redirect::to('/quiz')->with('message', 'Your username/password combination was incorrect')->withInput();
	}

}