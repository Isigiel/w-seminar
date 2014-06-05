<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('logout', function() {
// logout from the system
	Sentry::logout();
	Alert::add("success","You're logged out now.");
	return Redirect::to('home');
});


// THE NEW ORDER
Route::controller('home','HomeController');
Route::controller('search','SearchController');
Route::controller('account','AccountController');
Route::controller('register','RegisterController');
Route::controller('collection','CollectionController');
Route::resource('mod', 'ModController');
Route::resource('version', 'VersionController');
Route::resource('entry', 'EntryController');
Route::controller('','IndexController');