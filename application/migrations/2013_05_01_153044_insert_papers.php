<?php

class Insert_Papers {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('papers')->insert(
			array(
				'title' => 'Practice material for IIT-JEE',
				'content' => 'This is the material',
				'course_id' => 1
				)
			);
		DB::table('papers')->insert(
			array(
				'title' => 'Practice material for AIEEE',
				'content' => 'This is the materail for AIEEE',
				'course_id' => 2
				)
			);
		DB::table('papers')->insert(
			array(
				'title' => 'Practice material for 12/10th',
				'content' => 'This is for 10/12th students',
				'course_id' => 3
				)
			);
		DB::table('papers')->insert(
			array(
				'title' => 'Annual papers for IIT-JEE',
				'content' => 'This is for IIT-JEE aspirants',
				'course_id' => 1
				)
			);
		DB::table('papers')->insert(
			array(
				'title' => 'Annual papers for AIEEE aspirants',
				'content' => '30 practice question for AIEEE aspirants',
				'course_id' => 2
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
		//
	}

}