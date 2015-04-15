<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('courseType');
			$table->text('favouriteAspects');
			$table->text('leastFavouriteAspects');
			$table->text('courseReview');
			$table->integer('facilitiesRating');
			$table->integer('clarityRating');
			$table->integer('helpfulnessRating');
			$table->integer('jobProspectsRating');
			$table->integer('overallRating');
			$table->timestamps();
			$table->integer('course_id')->unsigned();

			$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}

}
