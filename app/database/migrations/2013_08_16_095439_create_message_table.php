<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message', function($table)
	    {
	    	$table->engine = 'InnoDB';
	    	
	        $table->increments('message_id'); // auto-incrementing primary key
	        $table->string('content');
	        $table->integer('sender');
	        $table->integer('receiver');
	        $table->integer('group_id');
	        $table->datetime('posted_date');
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