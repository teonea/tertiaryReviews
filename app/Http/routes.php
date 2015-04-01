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

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('reviews', 'ReviewsController@index');
Route::get('reviews/writeReview', 'ReviewsController@writeReview');
Route::get('reviews/{id}', 'ReviewsController@show');
Route::post('reviews', 'ReviewsController@store');


Route::get('courses', 'CoursesController@index');
Route::get('courses/{id}', 'CoursesController@show');

Route::get('schools', 'SchoolsController@index');
Route::get('schools/{id}', 'SchoolsController@show');