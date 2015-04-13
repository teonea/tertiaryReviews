<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	
	protected $fillable = [
		'title',
		'courseType',
		'favouriteAspects',
		'leastFavouriteAspects',
		'courseReview'
	];


	public function course() {

		return $this->belongsTo('App\Course');

	}

	public function school() {

		return $this->belongsTo('App\School');

	}
	

}
