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
			$table->increments('reviewID');
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
			$table->timestamp('publishedAt');

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
