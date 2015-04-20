<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	public $timestamps = false;

	protected $fillable = [
		'schoolName',
		'schoolPhone',
		'schoolFax',
		'schoolWebsite',
		'schoolType',
		'schoolAuthority',
		'schoolStreet',
		'schoolSuburb',
		'schoolCity',
		'regionName'
	];

	protected $guarded = [
		'id'
	];

	protected $table = 'schools';

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
