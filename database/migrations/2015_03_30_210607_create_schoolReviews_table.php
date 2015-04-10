<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schoolReviews', function(Blueprint $table)
		{
			$table->increments('schoolReviewID');
			$table->integer('schoolID')->unsigned();
			$table->integer('reviewID')->unsigned();

            $table->foreign('schoolID')->references('id')->on('schools');
            $table->foreign('reviewID')->references('id')->on('reviews');
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
		Schema::drop('schoolReviews');
	}

}
