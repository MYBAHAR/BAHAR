<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('author_id')->unsigned();
			$table->string('title',255);
			$table->longText('description')->nullable();
			$table->string('image')->nullable();
			$table->string('fee')->nullable();
			$table->string('isPublished')->default('no');
			$table->string('isBaharOfficial')->default('no');
			$table->timestamps();
		});

		Schema::table('courses', function($table){
			$table->foreign('author_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			//
		});
	}

}
