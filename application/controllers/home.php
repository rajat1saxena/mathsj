<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/
	/*public function __construct(){
		parent::__construct();
	}*/ 

	public function action_index()
	{
		return View::make('home.index');
	}

	public function action_student(){
		return View::make('home.student');
	}

	public function action_contact(){
		return View::make('home.contact');
	}

	public function action_doubts(){
		if (Input::get()){
			$submitted_data = Input::all();
			$rules = array('doubt'=>'required');
			$validation = Validator::make($submitted_data,$rules);
			if($validation->fails()){
				return Redirect::to('doubts')->with_errors($validation);
			}
			$doubt = new Doubt;
			$doubt->doubt = $submitted_data['doubt'];
			$doubt->user_id = Auth::user()->id;
			$doubt->save();
			return Redirect::to_action('home@doubts')->with('saved',true);		
		}else{
			return View::make('home.doubts');
		}
	}

	public function action_study(){
		return View::make('home.study');
	}

	public function action_doubtscorner(){
		return View::make('home.doubtscorner');
	}

	public function action_doubtdelete($doubt_number){
		return View::make('home.doubtdelete')->with('to_be_del',$doubt_number);
	}

	public function action_doubtdelete_yes($doubt_number){
		//check if the user is logged in
		if(Auth::check()){
			$doubt = Doubt::find($doubt_number);
			//check if the owner of the doubt is logged in or not.
			if($doubt->user_id==Auth::user()->id){
				$doubt->delete();
			}
		}
		return Redirect::to_action('home@doubtscorner');
	}

}