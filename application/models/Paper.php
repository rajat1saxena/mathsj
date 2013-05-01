<?php

class Paper extends Eloquent{
	public static $timestamps=false;

	public function course(){
		return $this->belongs_to('Course');
	}
}

?>