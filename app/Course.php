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

	

	

}
