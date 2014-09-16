<?php
class UserController extends BaseController{

	// Load login view
	public function getLogin(){
		return View::make('user.login');
	}

	// Execute login functionality
	public function postLogin(){
		$input = Input::all();

		$rules = array('email' => 'max:200|required|email', 'password' => 'max:100|required|min:8');

		$validation = Validator::make($input, $rules);
		if($validation->fails()){
			return Redirect::to('/user/login')->withErrors($validation);
		} else {
			$credentials = array('email' => $input['email'], 'password' => $input['password']);

			if(Auth::attempt($credentials)){
				return Redirect::to('/');
			} else {
				return Redirect::to('/user/login')->withMessage('Wrong email/password combination, please try again!');
			}
		}
	}

	public function getRegister(){
		return View::make('user.register');
	}

	public function postRegister(){
		$input = Input::all();

		$rules = array('firstname' => 'max:100|required', 'lastname' => 'max:100|required', 'email' => 'max:200|required|unique:users|email', 'password' => 'max:100|required|min:8', 'password_confirm' => 'max:100|required|same:password');

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User();
			$user->firstname = $input['firstname'];
			$user->lastname = $input['lastname'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->save();

			return Redirect::to('user/login');
		} else {
			return Redirect::to('user/register')->withInput()->withErrors($validation);
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}
}