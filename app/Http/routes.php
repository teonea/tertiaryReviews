<?php

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

Route::resource('reviews', 'ReviewsController');

Route::resource('courses', 'CoursesController');

Route::resource('schools', 'SchoolsController');
Route::get('schools/{id}/courses', 'SchoolsController@showcourses');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('search', 'SearchController@index');
