<?php
use App\Course;
use App\School;
use App\Subject;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'WelcomeController@home');



Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('privacyPolicy', 'PagesController@privacyPolicy');
Route::get('sitemap', 'PagesController@sitemap');
Route::get('termsAndConditions', 'PagesController@termsAndConditions');

Route::resource('user', 'UserController');

Route::resource('reviews', 'ReviewsController');
Route::get('reviews', 'ReviewsController@search');



Route::resource('courses', 'CoursesController');
Route::get('courses', 'CoursesController@search');


Route::resource('schools', 'SchoolsController');
Route::get('schools/{id}/courses', 'SchoolsController@showcourses');
Route::get('schools', 'SchoolsController@search');

Route::get('reviews/create', function(){
	
	$page = '';
	$description = '';
	$keywords = '';
	$subjects = Subject::all();
	$school = School::orderBy('schoolName', 'ASC')->lists('schoolName', 'id');
	$course = Course::orderBy('courseName', 'ASC')->lists('id', 'courseName');
	
	return view('reviews.create', compact('course', 'school', 'course', 'page', 'description', 'keywords'))->with('subjects', $subjects);
});

Route::get('/ajax-course', function(){
	$sub_id = Input::get('sub_id');
	$courses = Course::where('subject_id', '=', $sub_id)->get();

	return Response::json($courses);
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('search', 'SearchController@index');
