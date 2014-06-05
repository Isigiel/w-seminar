<?php

class HomeController extends BaseController 
{
	// No Filters needed, as this Controller only handles public requests

	// Index function
    public function getIndex () {
        $data['sites'] = Config::get('synopsis.sites');
        $data['login_sites'] = Config::get('synopsis.login_sites');
        $data['current'] = 'Home';
        $data['new_mods'] = Mod::orderBy('created_at','DESC')->take(6)->get();
        $data['high_mods'] = Mod::orderBy('downloads','DESC')->take(6)->get();
        if (Sentry::check()) {
        	$user = User::find(Sentry::getUser()['id']);
        	$user->load('mods');
        	$data['user'] = $user;
        }

        return View::make('home.view')->with($data);
    }
}