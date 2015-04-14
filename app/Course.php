<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	public function school() {

		return $this->belongsTo('App\School');

	}

	public function reviews() {

		return $this->hasMany('App\Review');

	}

	public function getSchoolName() {

		return School::where('id', $this->school_id)->first()->schoolName;

	}

	

	

}
