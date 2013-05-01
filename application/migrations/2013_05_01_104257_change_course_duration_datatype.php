<?php

class Change_Course_Duration_Datatype {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses',function($table){
			$table->drop_column('duration');
		});
		Schema::table('courses',function($table){
			$table->string('duration',20);
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses',function($table){
			$table->drop_column('duration');
		});
		Schema::table('courses',function($table){
			$table->integer('duration')->unsigned();
		});

	}

}