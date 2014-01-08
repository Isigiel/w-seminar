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
    return Redirect::to('/');
});

Route::controller('mod','ModController');
Route::controller('config','ConfigController');
Route::controller('changelog','ChangelogController');

Route::get('test', function()
{
    return View::make('test');
});

Route::controller('/','IndexController');


Route::get('/hello', function()
{
	return View::make('hello');
});