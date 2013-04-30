<?php

class Insert_Data_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(
			array(
				'email' => 'admin@gmail.com',
				'password' => Hash::make('mathsjadmin'),
				'course_id' => 1
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
		DB::table('users')->delete();
	}

}