<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	
	protected $fillable = [
		'course_id',
		'school_id',
		'subject_id',
		'title',
		'courseType',
		'favouriteAspects',
		'leastFavouriteAspects',
		'courseReview',
		'facilitiesRating',
		'clarityRating',
		'helpfulnessRating',
		'jobProspectsRating',
		'overallRating'
	];

	protected $guarded = [
		'id'
	];

	protected $table = 'reviews';

	public function course() {

		return $this->belongsTo('App\Course');

	}

	public function school() {

		return $this->belongsTo('App\School');

	}

	public function subject() {

		return $this->belongsTo('App\Subject');

	}

	public function getSchoolName() {

		return School::where('id', $this->school_id)->first()->schoolName;

	}

	public function getSubjectName() {

		return Subject::where('id', $this->subject_id)->first()->subjectName;

	}

	
	

}
