<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroupmapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('groupmap', function($table)
	    {
	    	$table->engine = 'InnoDB';
	    	
	        $table->increments('map_id'); // auto-incrementing primary key
	        $table->integer('group_id');
	        $table->integer('user_id');
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