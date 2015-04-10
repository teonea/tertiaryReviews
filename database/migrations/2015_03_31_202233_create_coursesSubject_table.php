<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesSubjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coursesSubject', function(Blueprint $table)
		{
			$table->increments('coursesSubject_id');
			$table->integer('course_id')->unsigned();
			$table->integer('subject_id')->unsigned();

			$table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('subject_id')->references('id')->on('subject');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coursesSubject');
	}

}
