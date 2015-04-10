<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {


	//display static pages
	public function about() {

		return view('pages.about');

	}

	public function contact() {

		return view('pages.contact');

	}

	public function privacyPolicy() {

		return view('pages.privacyPolicy');

	}

	public function sitemap() {

		return view('pages.sitemap');

	}

	public function termsAndConditions() {

		return view('pages.termsAndConditions');

	}
	

}
