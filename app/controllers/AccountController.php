<?php

class AccountController extends BaseController 
{
    
    // Controller Filters
    public function __construct() {
        $this->beforeFilter('auth', array('except' => array('')));
    }

    // Index function

    public function getIndex () {
        // Data collection
    	$data = array();
    	$data['user'] = Sentry::getUser();
        $data['current'] = 'Account';
        $data['sites'] = Config::get('synopsis.sites');
        $data['login_sites'] = Config::get('synopsis.login_sites');
        $data['mods'] = DB::select("	SELECT *
         					FROM modAuthors a, mods m 
         					WHERE a.user_id = ?
         					AND a.mod_id = m.id", array($data['user']['id']));
    	if (count($data['mods']) == 0)
        	$data['mods']=false;

        // Redering the view with collected data
        return View::make('account.view')->with($data);
    }

    // Password change
    public function postChangePassword ($id) {
        $user = User::find($id);
        if (!Hash::check(Input::get('cpass'), $user->password)) {
            Alert::add('danger','Given current password was not correct! Typed: '.Input::get('cpass'));
            return Redirect::to('account');
        }
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        Alert::add('success','Password updated!');

        return Redirect::to('account');
    }

    // Twitter Account
    public function postTwitter () {
        $data = Input::all();
        $user = User::find($data['pk']);
        $user->twitter = $data['value'];
        $user->save();
        return Response::json(null, 200);
    }

    // Minecraft Account
    public function postMinecraft () {
        $data = Input::all();
        $user = User::find($data['pk']);
        $user->mc_name = $data['value'];
        $user->save();
        return Response::json(null, 200);
    }
}