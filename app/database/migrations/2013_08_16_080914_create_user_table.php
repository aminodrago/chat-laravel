<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function($table)
	    {	
	    	$table->engine = 'InnoDB';
	    	
	        $table->increments('user_id'); // auto-incrementing primary key
	        $table->string('username', 100)->unique();
	        $table->string('email', 100)->unique();
	        $table->string('password');
	        $table->string('name', 100);
	        $table->string('activation', 255)->nullable();
	        $table->string('usertype', 100);
	        $table->datetime('register_date');
	        $table->datetime('last_visit_date');
	        $table->boolean('logged_in');
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