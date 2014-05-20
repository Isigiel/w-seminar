<?php

class HomeController extends BaseController 
{
	// No Filters needed, as this Controller only handles public requests

	// Index function
    public function getIndex () {
        $data['sites'] = Config::get('synopsis.sites');
        $data['login_sites'] = Config::get('synopsis.login_sites');
        $data['current'] = 'Home';
        $data['mods'] = Mod::orderBy('created_at')->take(4)->get();
        return View::make('home.view')->with($data);
    }
}