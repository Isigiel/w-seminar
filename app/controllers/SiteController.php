<?php

class SiteController extends BaseController 
{
    
    //Controller Filters
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('getView')));
    }
    
    public function postEdit ($id)
    {
        $site=false;
        $site=Site::where("mod_id",$id)->first();
        
        if ($site)
        {
            $site->content = Input::get("content");
            Alert::add("success","Your site was updated.");
        }   else    {
            $site = new Site;
            $site->mod_id=$id;
            $site->content=Input::get("content");
            $user = User::find(Sentry::getUser()["id"]);
            $user->sites()->attach($site["id"]);
            Alert::add("success","Your site was created.");
        }
        $site->save();
        return Redirect::to("mod/modify/$id");
    }
    
    public function getDelete ($id)
    {
        $sid=Site::where("mod_id",$id)->first()["id"];
        Site::destroy($sid);
        Alert::add("warning","Your site was destroyed.");
        return Redirect::to("mod/modify/$id");
    }
    
}