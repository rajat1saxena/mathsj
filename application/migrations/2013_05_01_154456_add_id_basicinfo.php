<?php

class Add_Id_Basicinfo {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('basicinfo',function($table){
			$table->increments('id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('basicinfo',function($table){
			$table->drop_column('id');
		});
	}

}