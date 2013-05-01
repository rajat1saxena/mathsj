<?php

class User extends Eloquent{
	public static $timestamps = false;

	public function doubts(){
		return $this->has_many('Doubt');
	}

	public function course(){
		return $this->belongs_to('Course');
	}
}

?>