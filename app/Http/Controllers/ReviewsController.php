<?php namespace App\Http\Controllers;

use App\Review;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ReviewsController extends Controller {



	public function index() {

		$reviews = Review::latest('publishedAt')->get();

		return view('reviews.index', compact('reviews'));

	}


	public function show($id) {

		$review = Review::findOrFail($id);

		return view('reviews.show', compact('review'));

	}


	public function writeReview() {

		return view('reviews.writeReview');

	}

	public function store() {

		$input = Request::all();

		Review::create($input);

		return redirect('reviews');

	}


}
