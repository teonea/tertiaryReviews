<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	public $timestamps = false;

	protected $fillable = [
		'subjectName'
	];

	protected $guarded = [
		'id'
	];

	protected $table = 'subjects';

	public function course() {

		return $this->hasMany('App\Course');

	}

	public function review() {

		return $this->hasOne('App\Review');

	}

}
