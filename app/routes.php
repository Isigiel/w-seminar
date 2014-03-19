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
    return Redirect::to('concept/layout');
});

Route::controller('mod','ModController');
Route::controller('config','ConfigController');
Route::controller('register','RegisterController');
Route::controller('concept','ConceptController');
Route::controller('site','SiteController');
Route::controller('cp','CpController');
Route::controller('','IndexController');

//Route::controller('/','IndexController');


