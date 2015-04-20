<?php namespace App\Http\Controllers;

use App\School;
use App\Course;
use App\Http\Requests;
use App\Http\Requests\SchoolRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SchoolsController extends Controller {

	public function index() {

		$schools = School::orderBy('schoolName', 'ASC')->paginate(15);

		return view('schools.index', compact('schools'));

	}

	public function show($id) {

		$school = School::findOrFail($id);

		return view('schools.show', compact('school'));

	}

	public function showcourses($id) {

		$data = School::where('id', $id)->with('courses')->get();

		$school = School::findOrFail($id);

		$course = Course::all();

		return view('schools.showcourses', compact('data', 'school', 'course'));

	}

	public function create() {

		return view('schools.create');

	}

	public function store(SchoolRequest $request) {


		School::create($request->all());
		
		return redirect('schools');

	}

	public function edit($id) {

		$school = School::findOrFail($id);
		
		return view('schools.edit', compact('school'));

	}

	public function update($id , SchoolRequest $request) {

		$school = School::findOrFail($id);

		$school->update($request->all());

		return redirect('schools');

	}
	

}
