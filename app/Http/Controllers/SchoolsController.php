<?php namespace App\Http\Controllers;

use App\School;
use App\Course;
use App\Http\Requests;
use App\Http\Requests\SchoolRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Input;

class SchoolsController extends Controller {

	public function __construct() {

		$this->middleware('auth', ['only' => 'edit', 'destroy']);

	}

	public function index() {

		$page = 'Tertiary Reviews NZ - Education Providers';
		$description = 'Search tertiary Education Institutions provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'search tertiary education providers, Institutions, schools, university';

		$query = Input::get('q');

		if($query) {
			$schools = School::where('schoolName', 'LIKE', "%$query%")->orWhere('regionName', 'LIKE', "%$query%")->orWhere('schoolCity', 'LIKE', "%$query%")->orWhere('schoolType', 'LIKE', "%$query%")->orWhere('schoolAuthority', 'LIKE', "%$query%")->orWhere('schoolWebsite', 'LIKE', "%$query%")->orderBy('schoolName', 'ASC')->paginate(15);
		} else {
			$schools = School::orderBy('schoolName', 'ASC')->paginate(15);
		}

		return view('schools.index', compact('query', 'schools', 'page', 'description', 'keywords'));

	}

	public function show($id) {

		$page = 'Tertiary Reviews NZ - '.School::where('id', $id)->first()->schoolName;
		$description = 'Tertiary Education Institutions provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'tertiary education providers, Institutions, schools, university, polytech, higher education, tertiary';

		$school = School::findOrFail($id);

		return view('schools.show', compact('school', 'page', 'description', 'keywords'));

	}

	public function showcourses($id) {

		$page = 'Tertiary Reviews NZ - '.School::where('id', $id)->first()->schoolName.' - Courses';
		$description = 'Tertiary Education Institutions courses in which they provide. You may add courses to our database and write reviews.';
		$keywords = 'schools courses nz, new zealand courses, tertiary education courses';

		$query = Input::get('q');

		if($query) {
			$school = School::findOrFail($id);
			$data = School::where('id', $id)->with('courses');
			$courses = Course::where('courseName', 'LIKE', "%$query%")->orderBy('courseName', 'ASC')->paginate(15);
		} else {
			$courses = Course::orderBy('courseName', 'ASC')->paginate(15);
			$data = School::where('id', $id)->with('courses');
			$school = School::findOrFail($id);
		}

		return view('schools.showcourses', compact('query', 'data', 'school','courses', 'page', 'description', 'keywords'));

	}

	public function create() {

		$page = 'Tertiary Reviews NZ - List a Tertiary Education Provider ';
		$description = 'List a Tertiary Education Provider, only admin may do this.';
		$keywords = 'list school';

		return view('schools.create', compact('page', 'description', 'keywords'));

	}

	public function store(SchoolRequest $request) {

		School::create($request->all());
		
		session()->flash('flash_message', 'School successfully posted!');

		return redirect('schools');

	}

	public function edit($id) {

		$page = 'Tertiary Reviews NZ - Edit - '.School::where('id', $id)->first()->schoolName;
		$description = 'Edit Tertiary Education Institution details.';
		$keywords = 'edit school, edit details, tertiary education provider';

		$school = School::findOrFail($id);
		
		return view('schools.edit', compact('school', 'page', 'description', 'keywords'));

	}

	public function update($id , SchoolRequest $request) {

		$school = School::findOrFail($id);

		$school->update($request->all());

		session()->flash('flash_message', 'School successfully edited!');

		return redirect('schools');

	}
	
	public function destroy($id)
	{	
		try {
		  	$school = School::findOrFail($id);

			$school->delete();

			session()->flash('flash_message', 'School successfully deleted!');

	        return Redirect::route('schools.index')->with('message', 'School successfully deleted');

		} catch ( \Exception $e) {

		   	session()->flash('flash_message', 'This school can not be deleted as it has course listings. You have to delete the courses first.');

	        return Redirect::route('schools.index', compact('query', 'schools', 'page', 'description', 'keywords'))->with('message', 'School unsuccessfully deleted');
		}
	}

}
