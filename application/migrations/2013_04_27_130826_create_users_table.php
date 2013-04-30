<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('email',100)->unique();
			$table->text('password');
		});

		/*DB::table('users')->insert(
			array(
				'email' => 'admin@gmail.com',
				'password' => Hash::make('mathsjadmin')
				)
			);*/
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}