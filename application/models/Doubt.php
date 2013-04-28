<?php

class Doubt extends Eloquent{
	public static $timestamps = false;

	public function user(){
		return $this->belongs_to('User');
	}
}

?>