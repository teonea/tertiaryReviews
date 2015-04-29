<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	public $timestamps = false;

	protected $fillable = [
		'school_id',
		'subject_id',
		'courseName'
	];

	protected $guarded = [
		'id'
	];

	protected $table = 'courses';

	public function school() {

		return $this->belongsTo('App\School');

	}

	public function review() {

		return $this->hasMany('App\Review');

	}

	public function subject() {

		return $this->belongsTo('App\Subject');

	}

	public function getSchoolName() {

		return School::where('id', $this->school_id)->first()->schoolName;

	}

	public function facilitiesRatingAverage() {

		$result = Review::avg('facilitiesRating');
		return round( $result * 100 ) / 5;
	
	}

	public function clarityRatingAverage() {

		$result = Review::avg('clarityRating');
		return round( $result * 100 ) / 5;
	
	}

	public function helpfulnessRatingAverage() {

		$result = Review::avg('helpfulnessRating');
		return round( $result * 100 ) / 5;
	
	}

	public function jobProspectsRatingAverage() {

		$result = Review::avg('jobProspectsRating');
		return round( $result * 100 ) / 5;
	
	}

	public function overallRatingAverage() {

		$result = Review::avg('overallRating');
		return round( $result * 100 ) / 5;
		
	
	}



}
