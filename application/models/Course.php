<?php
class Course extends Eloquent{
	public static $timestamps = false;

	public function users(){
		return $this->has_many('User');
	}

	public function papers(){
		return $this->has_many('Paper');
	}
}
?>