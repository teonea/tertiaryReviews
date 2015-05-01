<?php namespace App\Http\Controllers;

use App\Subject;
use App\Review;
use App\Course;
use App\School;
use App\Http\Requests;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller {

	public function __construct() {

		$this->middleware('auth', ['only' => 'edit']);

	}

	public function index() {

		$page = 'Reviews';
		$description = 'Honest, unbiased reviews on tertiary education courses around New Zealand.';
		$keywords = 'university reviews, tertiary education reviews, polytech reviews, course reviews, courses new zealand, education new zealand';


		$reviews = Review::latest('created_at')->paginate(10);

		return view('reviews.index', compact('reviews', 'page', 'description', 'keywords'));

	}

	public function show($id) {

		$page = 'Reviews';
		$description = 'Honest, unbiased reviews on tertiary education courses around New Zealand.';
		$keywords = 'university reviews, nz, tertiary education reviews, polytech reviews, course reviews, courses new zealand, education new zealand';

		$review = Review::findOrFail($id);

		return view('reviews.show', compact('review', 'page', 'description', 'keywords'));


	}

	public function create() {

		$page = 'Write Review';
		$description = 'Write honest, unbiased reviews on tertiary education courses around New Zealand.';
		$keywords = 'write reviews, nz, review tertiary institutes, review courses, education';

		$subjects = Subject::all();
		$schools = School::all();
		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$course = Course::orderBy('courseName', 'ASC')->lists('id', 'courseName');
		
		return view('reviews.create', compact('course', 'school','schools', 'course', 'page', 'description', 'keywords'))->with('subjects', $subjects);

	}

	public function store(ReviewRequest $request) {

		Review::create($request->all());

		$secret   = '6LcKBgYTAAAAAJTKa3Y3NfkNdIa0L9Sb9nzauQVi'; 
	    $response = Input::get('g-recaptcha-response');
	    $url      = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response;
	    $jsonObj  = file_get_contents($url);
	    $json     = json_decode($jsonObj, true);

	    if ($json['success']==true) {
	    	session()->flash('flash_message', 'Review successfully posted!');
			return redirect('reviews');
	    } else {
	    	session()->flash('flash_message', 'Google Recaptcha Error: You must check that you are not a robot!');
	    	return Redirect::back()->with('message','Unsuccessful!') ->withInput();
	    }

	}

	public function edit($id) {

		$page = 'Edit Review';
		$description = 'Edit Reviews posted in Tertiary Reviews NZ.';
		$keywords = 'edit reviews';

		$review = Review::findOrFail($id);
		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$course = Course::orderBy('courseName', 'ASC')->lists('courseName', 'id');
		$subject = Subject::orderBy('subjectName', 'ASC')->lists('subjectName', 'id');
		
		return view('reviews.edit', compact('review', 'school', 'course', 'subject', 'page', 'description', 'keywords'));

	}

	public function update($id , ReviewRequest $request) {

		$review = Review::findOrFail($id);

		$review->update($request->all());

		$secret   = '6LcKBgYTAAAAAJTKa3Y3NfkNdIa0L9Sb9nzauQVi'; 
	    $response = Input::get('g-recaptcha-response');
	    $url      = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response;
	    $jsonObj  = file_get_contents($url);
	    $json     = json_decode($jsonObj, true);

	    if ($json['success']==true) {
	    	session()->flash('flash_message', 'Review successfully edited!');
			return redirect('reviews');
	    } else {
	    	session()->flash('flash_message', 'Google Recaptcha Error: You must check that you are not a robot!');
	    	return Redirect::back()->with('message','Unsuccessful!') ->withInput();
	    }

	}

	public function search()
	{

		$page = 'Reviews';
		$description = 'Search Reviews posted in Tertiary Reviews NZ.';
		$keywords = 'search reviews, tertiary education course reviews';

		$query = Input::get('q');

		if($query) {
			$reviews = Review::where('title', 'LIKE', "%$query%")->orWhere('courseType', 'LIKE', "%$query%")->orWhere('favouriteAspects', 'LIKE', "%$query%")->orWhere('leastFavouriteAspects', 'LIKE', "%$query%")->orWhere('courseReview', 'LIKE', "%$query%")->latest('created_at')->paginate(15);
		} else {
			$reviews = Review::latest('created_at')->paginate(10);
		}

		return view('reviews.index', compact('query', 'reviews', 'page', 'description', 'keywords'));
	}

	public function destroy($id)
	{	
		$review = Review::findOrFail($id);

		$review->delete();

		session()->flash('flash_message', 'Review successfully deleted!');

        return Redirect::route('reviews.index')->with('message', 'Review successfully deleted');

	}

}
