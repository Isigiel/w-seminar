<?php

class SearchController extends BaseController 
{
	// No Filters needed, as this Controller only handles public requests

	// Index function
    public function getModCompare ($id) {
        $original = Mod::find($id);
        $mods = Mod::where('category',$original->category)->get();
        foreach ($mods as $key=>$mod) {
            if ($mod->attributes_json != "" && $mod->id != $original->id) {
                $mods[$key]->distance = Get::distance(json_decode($original->attributes_json),json_decode($mod->attributes_json));
            } else {
                $mods[$key]->distance = 500;
            }
            
        }
        $mods->sortBy('distance');
        $data['sites'] = Config::get('synopsis.sites');
        $data['sites'][2] = array('title'=>'Search','slug'=>"#");
        $data['login_sites'] = Config::get('synopsis.login_sites');
        $data['current'] = 'Search';
        $data['mods']=$mods;
        return View::make('search.view')->with($data);
    }
}