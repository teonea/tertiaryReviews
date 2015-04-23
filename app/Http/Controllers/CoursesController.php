<?php namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\Subject;
use App\Http\Requests;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class CoursesController extends Controller {

	public function __construct() {

		$this->middleware('auth', ['only' => 'edit']);

	}

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

	public function create() {

		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$subject = Subject::orderBy('subjectName', 'ASC')->lists('subjectName', 'id');

		return view('courses.create', compact('school', 'subject'));

	}

	public function store(CourseRequest $request) {


		Course::create($request->all());

		session()->flash('flash_message', 'Course successfully posted!');
		
		return redirect('courses');

	}

	public function edit($id) {

		$course = Course::findOrFail($id);
		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$subject = Subject::orderBy('subjectName', 'ASC')->lists('subjectName', 'id');
		
		return view('courses.edit', compact('course', 'school', 'subject'));

	}

	public function update($id , CourseRequest $request) {

		$course = Course::findOrFail($id);

		$course->update($request->all());

		session()->flash('flash_message', 'Course successfully edited!');

		return redirect('courses');

	}


	public function destroy($id)
	{	
		$course = Course::findOrFail($id);

		$course->delete();

		session()->flash('flash_message', 'Course successfully deleted!');

        return Redirect::route('courses.index')->with('message', 'Course successfully deleted');

	}


}