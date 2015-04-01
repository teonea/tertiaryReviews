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
			$table->increments('coursesSubjectID');
			$table->integer('courseID')->unsigned();
			$table->integer('subjectID')->unsigned();

			$table->foreign('courseID')->references('courseID')->on('courses');
            $table->foreign('subjectID')->references('subjectID')->on('subject');
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
