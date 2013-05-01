<?php

class Create_Course_Foreign_Key {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function($table){
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
		Schema::table('users',function($table){
			$table->drop_foreign('users_course_id_foreign');
			$table->drop_column('course_id');
		});
	}

}