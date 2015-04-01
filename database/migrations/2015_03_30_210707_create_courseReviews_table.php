<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courseReviews', function(Blueprint $table)
		{
			$table->increments('courseReviewID');
			$table->integer('courseID')->unsigned();
			$table->integer('reviewID')->unsigned();

			$table->foreign('courseID')->references('courseID')->on('courses');
            $table->foreign('reviewID')->references('reviewID')->on('reviews');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courseReviews');
	}

}
