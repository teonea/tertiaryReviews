<?php namespace App\Http\Controllers;

use App\Subject;
use App\Review;
use App\Course;
use App\School;
use App\Http\Requests;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller {



	public function index() {

		$reviews = Review::latest('created_at')->paginate(15);

		return view('reviews.index', compact('reviews'));

	}

	public function show($id) {

		$review = Review::findOrFail($id);

		return view('reviews.show', compact('review'));


	}

	public function create() {

		$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
		$course = Course::orderBy('courseName', 'ASC')->lists('courseName', 'id');
		$subject = Subject::orderBy('subjectName', 'ASC')->lists('subjectName', 'id');

		return view('reviews.create', compact('school', 'course', 'subject'));

	}

	public function store(ReviewRequest $request) {

		Review::create($request->all());
		
		return redirect('reviews');

	}

	public function edit($id) {

		$review = Review::findOrFail($id);
		
		return view('reviews.edit', compact('review'));

	}

	public function update($id , ReviewRequest $request) {

		$review = Review::findOrFail($id);

		$review->update($request->all());


		return redirect('reviews');

	}

}
