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
			$table->increments('id');
			$table->text('courseName');
			$table->integer('school_id')->unsigned();
			$table->integer('subject_id')->unsigned();

			$table->foreign('school_id')->references('id')->on('schools');
			$table->foreign('subject_id')->references('id')->on('subjects');

			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}