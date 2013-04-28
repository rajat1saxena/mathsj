<?php

class Create_Courses_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses',function($table){
			$table->increments('id');
			$table->string('course');
			$table->integer('duration')->unsigned();
		});

		DB::table('courses')->insert(
			array(
				'course' => '1 year iit-jee',
				'duration' => '1'
				)
			);
		DB::table('courses')->insert(
			array(
				'course' => '2 years iit-jee',
				'duration' => '2'
				)
			);
		DB::table('courses')->insert(
			array(
				'course' => '1 year aieee',
				'duration' => '1'
				)
			);
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}