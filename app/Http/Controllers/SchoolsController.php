<?php namespace App\Http\Controllers;

use App\School;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SchoolsController extends Controller {

	public function index() {

		$schools = School::all();

		return view('schools.index', compact('schools'));

	}


	public function show($id) {

		$school = School::findOrFail($id);

		return view('schools.show', compact('school'));

	}

}
