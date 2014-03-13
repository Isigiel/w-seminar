<?php

class SiteController extends BaseController 
{
    
    //Controller Filters
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('getView')));
    }
    
    public function getNew ($id)
    {
        $mod = Mod::find($id);
        return View::make("site.new")->with("mod",$mod);
    }
    
    public function postNew ($id)
    {
        $data = Input::all();
        $rules["title"] = "required";
        $rules["content"] = "required";
        
        $validator = Validator::make($data,$rules);
        
        
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
                Alert::add("danger",$message);
            }
            return Redirect::to("site/new"."/".$id);
        } else {
            $site = new Site;
            $site->title = $data["title"];
            $site->mod_id = $id;
            $site->content = $data["content"];
            $site->save();
            $user = User::find(Sentry::getUser()["id"]);
            $user->sites()->attach($site["id"]);
        }
        return Redirect::to("cp");
    }
    
    public function getModify ($id)
    {
        $site=Site::find($id);
        $mod=Mod::find($site["mod_id"]);
        if (Session::has("content"))
        {
            $content = Session::get("content");
            return View::make("site.modify")->with(array("modify"=>true,"site"=>$site,"content"=>$content,"mod"=>$mod));
        } else {
            return View::make("site.modify")->with(array("modify"=>false,"site"=>$site,"mod"=>$mod));
        }
    }
    
    public function postModify ($id)
    {
        $data = Input::all();
        $rules["title"] = "required";
        $rules["content"] = "required";
        
        $validator = Validator::make($data,$rules);
        
        
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
                Alert::add("danger",$message);
            }
            Session::put("content",$data["content"]);
            return Redirect::to("site/modify"."/".$id);
        } else {
            $site = Site::find($id);
            $site->title = $data["title"];
            $site->content = $data["content"];
            $site->save();
        }
        return Redirect::to("cp");
    }
    
}