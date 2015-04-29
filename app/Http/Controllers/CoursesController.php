<?php namespace App\Http\Controllers;

use App\Course;
use App\Review;
use App\School;
use App\Subject;
use App\Http\Requests;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Input;

class CoursesController extends Controller {

	public function __construct() {

		$this->middleware('auth', ['only' => 'edit']);

	}

	public function index() {

		$page = 'Courses';
		$description = 'Course listings where you can write reviews.';
		$keywords = 'courses nz, tertiary education courses, write a review, list a course, course reviews nz';

		$courses = Course::orderBy('courseName', 'ASC')->paginate(15);

		return view('courses.index', compact('courses', 'page', 'description', 'keywords'));

	}

	public function show($id) {

		$page = 'Courses';
		$description = 'Tertiary Education courses provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'tertiary education course';

		$course = Course::findOrFail($id);
		$reviews = Review::latest('created_at')->paginate(5);

		return view('courses.show', compact('course', 'reviews', 'page', 'description', 'keywords'));

	}

	public function create() {

		$page = 'List a Course';
		$description = 'List a course to add to our courses database.';
		$keywords = 'tertiary education course, add a course, list, course';

		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$subject = Subject::orderBy('subjectName', 'ASC')->lists('subjectName', 'id');

		return view('courses.create', compact('school', 'subject', 'page', 'description', 'keywords'));

	}

	public function store(CourseRequest $request) {


		Course::create($request->all());

		$secret   = '6LcKBgYTAAAAAJTKa3Y3NfkNdIa0L9Sb9nzauQVi'; 
	    $response = Input::get('g-recaptcha-response');
	    $url      = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response;
	    $jsonObj  = file_get_contents($url);
	    $json     = json_decode($jsonObj, true);

	    if ($json['success']==true) {
	    	session()->flash('flash_message', 'Course successfully posted!');	
			return redirect('courses');
	    } else {
	    	session()->flash('flash_message', 'Google Recaptcha Error: You must check that you are not a robot!');
	    	return Redirect::back()->with('message','Unsuccessful!') ->withInput();
	    }

	}

	public function edit($id) {

		$page = 'Edit Course';
		$description = 'Edit Course Details, available to admin users only.';
		$keywords = 'edit tertiary education course';

		$course = Course::findOrFail($id);
		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$subject = Subject::orderBy('subjectName', 'ASC')->lists('subjectName', 'id');
		
		return view('courses.edit', compact('course', 'school', 'subject', 'page', 'description', 'keywords'));

	}

	public function update($id , CourseRequest $request) {

		$course = Course::findOrFail($id);

		$course->update($request->all());

		$secret   = '6LcKBgYTAAAAAJTKa3Y3NfkNdIa0L9Sb9nzauQVi'; 
	    $response = Input::get('g-recaptcha-response');
	    $url      = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response;
	    $jsonObj  = file_get_contents($url);
	    $json     = json_decode($jsonObj, true);

	    if ($json['success']==true) {
	    	session()->flash('flash_message', 'Course successfully edited!');
			return redirect('courses');
	    } else {
	    	session()->flash('flash_message', 'Google Recaptcha Error: You must check that you are not a robot!');
	    	return Redirect::back()->with('message','Unsuccessful!') ->withInput();
	    }

	}

	public function search()
	{

		$page = 'Courses';
		$description = 'Search for tertiary Education courses provided in New Zealan where you can list courses or write reviews.';
		$keywords = 'search, browse, search tertiary education course';

		$query = Input::get('q');

		if($query) {
			$courses = Course::where('courseName', 'LIKE', "%$query%")->orderBy('courseName', 'ASC')->paginate(15);
		} else {
			$courses = Course::orderBy('courseName', 'ASC')->paginate(15);
		}

		return view('courses.index', compact('query', 'courses', 'page', 'description', 'keywords'));
	}

	public function destroy($id)
	{	
		try {
		  	$course = Course::findOrFail($id);

			$course->delete();

			session()->flash('flash_message', 'Course successfully deleted!');

	        return Redirect::route('courses.index')->with('message', 'Course successfully deleted');

		} catch ( \Exception $e) {

		   	session()->flash('flash_message', 'This course can not be deleted as it has been reviewed. You have to delete the reviews first.');

	        return Redirect::route('courses.index')->with('message', 'Course unsuccessfully deleted');
		}
	}


}