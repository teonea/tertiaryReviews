<?php namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CoursesController extends Controller {

	public function index() {

		$courses = Course::orderBy('courseName', 'ASC')->paginate(15);

		return view('courses.index', compact('courses'));

	}

	public function show($id) {

		$course = Course::findOrFail($id);

		return view('courses.show', compact('course'));

	}

	public function scopeSearch($query, $search) {

		return $query->where('courseName', 'LIKE', "%$search%");

	}


}