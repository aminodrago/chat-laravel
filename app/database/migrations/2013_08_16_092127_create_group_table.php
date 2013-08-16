<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('group', function($table)
	    {
	    	$table->engine = 'InnoDB';
	    	
	        $table->increments('group_id'); // auto-incrementing primary key
	        $table->string('title');
	        $table->integer('owner');
	        $table->datetime('creation_time');
	        $table->boolean('access_level');
	        $table->text('params');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}