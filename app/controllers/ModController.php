<?php

class ModController extends \BaseController {


// Controller Filters
	public function __construct() {
		$this->beforeFilter('auth', array('except' => array('show')));
		$this->beforeFilter('author', array('except' => array('show','store')));
	}

/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
//
}


/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
	$mod = new Mod;
	$input = Input::all();
	$id = Sentry::getUser()['id'];

	$mod->description = $input['description'];
	$mod->name = $input['name'];
	$mod->author = $input['author'];
	$mod->tags = $input['tags'];
	$mod->category = $input['category'];
	$mod->save();

	$mod->authors()->attach($id);

	return Redirect::to("mod/$mod->id/edit");
}


/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
	$attr = explode('.', $id);
	$id = $attr[count($attr)-1];
	$mod = Mod::with('authors.entries','versions')->find($id);
	$mod->authors[0]->entries = $mod->authors[0]->entries->sortByDesc('updated_at');

	$data['sites'] = Config::get('synopsis.sites');
	$data['login_sites'] = Config::get('synopsis.login_sites');
	$data['sites'][2] = array('title'=>$mod->name,'slug'=>"mod/$mod->name.$mod->id/edit");
	$data['current'] = $mod->name;
	$data['mod'] = $mod;

	return View::make('mod.show')->with($data);

}


/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
	$attr = explode('.', $id);
	$id = $attr[count($attr)-1];
	$mod = Mod::with('versions')->find($id);

	$data['user'] = Sentry::getUser();
	$data['sites'] = Config::get('synopsis.sites');
	$data['login_sites'] = Config::get('synopsis.login_sites');
	$data['sites'][2] = array('title'=>$mod->name,'slug'=>"mod/$mod->name.$mod->id/edit");
	$data['current'] = $mod->name;
	$data['categories']=Config::get('synopsis.categories');
	$data['character']=Config::get('synopsis.character')[$data['categories'][$mod->category]];
	$data['mod'] = $mod;
	$data['attributes'] = false;
	$data['attributes'] = json_decode($mod->attributes_json,true);
	// return Response::json($data['attributes']);

	return View::make('mod.edit.view')->with($data);
}


/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
	$input = Input::all();
	$mod = Mod::find($id);

	switch ($input['type']) {
		case 'settings':
		$mod->description = $input['description'];
		$mod->name = $input['name'];
		$mod->author = $input['author'];
		$mod->tags = $input['tags'];
		if ($mod->category != $input['category']) {
			$mod->attributes_json = '';
		}
		$mod->category = $input['category'];
		break;

		case 'images':
		$mod->icon = $input['icon'];
		$mod->splash = $input['splash'];
		$mod->head = $input['head'];
		break;

		case 'links':
		$mod->repo = $input['repo'];
		$mod->ci = $input['ci'];
		$mod->threat = $input['threat'];
		$mod->tracker = $input['tracker'];
		$mod->wiki = $input['wiki'];
		$mod->forum = $input['forum'];
		break;

		case 'character':
		$mod->attributes_json = json_encode(Input::get('char'));
		break;
	}

	$mod->save();

	return Redirect::back();
}


/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
//
}


}
