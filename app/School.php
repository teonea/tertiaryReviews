<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $fillable = [
		'schoolName'

	];

	public function courses() {

		return $this->hasMany('App\Course');

	}

	public function review() {

		return $this->hasMany('App\Review');

	}

	public function getSchoolsName() {

		return School::where('id', $this->school_id)->first()->schoolName;

	}

}
