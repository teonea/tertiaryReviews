<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	
	protected $fillable = [
		'title',
		'courseType',
		'favouriteAspects',
		'leastFavouriteAspects',
		'courseReview',
		'facilitiesRating',
		'clarityRating',
		'helpfulnessRating',
		'jobProspectsRating',
		'overallRating',
		'publishedAt'
	];


}
