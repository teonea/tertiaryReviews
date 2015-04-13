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

Route::get('search', 'SearchController@index');
Route::get('searchResults', 'SearchController@searchResults');

Route::get('courses', 'CoursesController@index');
Route::get('courses/{id}', 'CoursesController@show');

Route::get('schools', 'SchoolsController@index');
Route::get('schools/{id}', 'SchoolsController@show');
Route::get('schools/{id}/courses', 'SchoolsController@showcourses');

Route::resource('schools', 'SchoolsController');