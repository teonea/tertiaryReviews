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
			$table->increments('courseReview_id');
			$table->integer('course_id')->unsigned();
			$table->integer('review_id')->unsigned();

			$table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('review_id')->references('id')->on('reviews');

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
