<?php

class Create_Widgets_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widgets',function($table){
			$table->increments('id');
			$table->text('title');
			$table->text('html');
		});

		DB::table('widgets')->insert(
			array(
				'title' => 'Join Demo classes today!',
				'html' => '</p>This is just the great demo of widgets.</p>'
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
		Schema::drop('widgets');
	}

}