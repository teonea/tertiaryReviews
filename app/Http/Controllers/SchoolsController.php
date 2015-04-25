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

		$page = 'Schools';
		$description = 'Tertiary Education Institutions provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'tertiary education providers, Institutions, schools, university, polytech, higher education, tertiary, NMIT, SIT, CPIT, Yoobee, AUT, VIC, Otago, Canterbury';

		$schools = School::orderBy('schoolName', 'ASC')->paginate(15);

		return view('schools.index', compact('schools', 'page', 'description', 'keywords'));

	}

	public function show($id) {

		$page = 'Schools';
		$description = 'Tertiary Education Institutions provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'tertiary education providers, Institutions, schools, university, polytech, higher education, tertiary';

		$school = School::findOrFail($id);

		return view('schools.show', compact('school', 'page', 'description', 'keywords'));

	}

	public function showcourses($id) {

		$page = 'Schools Courses';
		$description = 'Tertiary Education Institutions courses in which they provide. You may add courses to our database and write reviews.';
		$keywords = 'schools courses nz, new zealand courses, tertiary education courses';

		$course = Course::paginate(15);

		$data = School::where('id', $id)->with('courses')->paginate(15);

		$school = School::findOrFail($id);

		return view('schools.showcourses', compact('data', 'school', 'course', 'page', 'description', 'keywords'));

	}

	public function create() {

		$page = 'List a School';
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

		$page = 'Edit School';
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
		$school = School::findOrFail($id);

		$school->delete();

		session()->flash('flash_message', 'School successfully deleted!');

        return Redirect::route('schools.index')->with('message', 'School successfully deleted');

	}

	public function search()
	{

		$page = 'Schools';
		$description = 'Search tertiary Education Institutions provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'search tertiary education providers, Institutions, schools, university';

		$query = Input::get('q');

		if($query) {
			$schools = School::where('schoolName', 'LIKE', "%$query%")->orderBy('schoolName', 'ASC')->paginate(15);
		} else {
			$schools = School::orderBy('schoolName', 'ASC')->paginate(15);
		}

		return view('schools.index', compact('query', 'schools', 'page', 'description', 'keywords'));
	}

}
