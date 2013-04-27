<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */

	public function __construct(){
		//Assets
		Asset::add('jquery','js/jquery.min.js');
		Asset::add('960_12_col','css/960_12_col.css');
		Asset::add('reset','css/reset.css');
		Asset::add('text','css/text.css');
		Asset::add('style','css/style.css');
		parent::__construct();
	}

	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public $layout = 'layouts.main';

}