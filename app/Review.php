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

	public function getSchoolName() {

		return School::where('id', $this->school_id)->first()->schoolName;

	}
	
	

}
