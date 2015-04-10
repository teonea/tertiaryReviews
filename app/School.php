<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $fillable = [
		'schoolName'

	];

	public function courses() {

		return $this->hasMany('App\Course');

	}

}
