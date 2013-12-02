<?php

class UserController extends BaseController {

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), User::$rules);

   		if ($validator->passes()) {
			$user = new User();
   			$user->firstname = Input::get('firstname');
   			$user->lastname = Input::get('lastname');
   			$user->email = Input::get('email');
   			$user->password = Hash::make(Input::get('password'));
   			$user->save();
   		} else {
      		// validation has failed, display error messages
   		}
	}

}