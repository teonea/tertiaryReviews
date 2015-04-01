<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {



	//display about page
	public function about() {

		$data = [];
		$data['name'] = 'Hannah Teonea';
		return view('pages.about', $data);

	}

	//display about page
	public function contact() {

		$data = [];
		$data['name'] = 'Hannah Teonea';
		return view('pages.contact', $data);

	}



}
