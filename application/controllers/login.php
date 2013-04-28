<?php

class Login_Controller extends Base_Controller {

	public $restful = true;

	public function get_index(){}

	public function post_index(){
		$submitted_data = Input::all();
		$rules = array('username'=>'required|email','password'=>'required');
		$validation = Validator::make($submitted_data,$rules);
		if($validation->fails()){
			return Redirect::to('login')->with_errors($validation);
		}
		if(Auth::attempt($submitted_data)){
			if(Auth::check()){
				return Redirect::to_action('home@student');
			}else{
				return Redirect::to_action('home@student');
			}
		}else{
			return Redirect::to_action('home@index')->with('unable','Invalid Email/Password!');
		}
	}

	public function get_logout(){
		//check if user is logged in
		if(Auth::check()){
			Auth::logout();
			return View::make('login.logout');
		}else{
			return Redirect::to_action('home@index');
		}
	}
}