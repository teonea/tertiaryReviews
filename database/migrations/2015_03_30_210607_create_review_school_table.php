<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewSchoolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review_school', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('school_id')->unsigned();
			$table->integer('review_id')->unsigned();

            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('review_id')->references('id')->on('reviews');
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
		Schema::drop('review_school');
	}

}
