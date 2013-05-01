<?php

class Create_Papers_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('papers',function($table){
			$table->increments('id');
			$table->string('title',200);
			$table->text('content');
			$table->integer('course_id')->unsigned();
			$table->foreign('course_id')->references('id')->on('courses');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('papers');
	}

}