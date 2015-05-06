<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {


	//display static pages
	public function about() {

		$page = 'Tertiary Reviews NZ - About - NZ\'s biggest online collection of reviews on tertiary education courses.';
		$description = 'Tertiary Reviews in an online network providing honest, unbiased reviews on tertiary education courses around New Zealand.';
		$keywords = 'tertiary reviews new zealand, reviews, education, course, new zealand, university, study, training, decision, work, advice, nz, jobs, career, money, government';

		return view('pages.about', compact('page', 'description', 'keywords'));

	}

	public function contact() {

		$page = 'Tertiary Reviews NZ - Contact Us';
		$description = 'Contact us or give some feedback for Tertiary Reviews here.';
		$keywords = 'tertiary reviews new zealand, contact, email, feedback, reviews, read, write, new zealand, university, polytech, study, training, education, decision, work, advice, nz, jobs, government';

		return view('pages.contact', compact('page', 'description', 'keywords'));

	}

	public function privacyPolicy() {

		$page = 'Tertiary Reviews NZ - Privacy Policy';
		$description = 'Details of Tertiary Reviews legal disclaimer, as well as our privacy, security and copyright policies.';
		$keywords = 'tertiary reviews new zealand, privacy policy, security, copyright policies, educate';

		return view('pages.privacyPolicy', compact('page', 'description', 'keywords'));

	}

	public function siteMap() {

		$page = 'Tertiary Reviews NZ - Site Map';
		$description = 'Tertiary Reviews site map to make the site easier to navigate.';
		$keywords = 'tertiary reviews site map, reviews, navigation, user friendly, education';

		return view('pages.siteMap', compact('page', 'description', 'keywords'));

	}

	public function termsAndConditions() {

		$page = 'Tertiary Reviews NZ - Terms &amp; Conditions';
		$description = 'Terms and Conditions for Tertiary Reviews. You must adhere by these in order to post reviews and list courses.';
		$keywords = 'tertiary reviews terms and conditions, tacs, terms, agreement, write reviews';

		return view('pages.termsAndConditions', compact('page', 'description', 'keywords'));

	}
	

}
