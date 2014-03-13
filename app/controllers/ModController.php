<?php

class ModController extends BaseController 
{
    
    //Controller Filters
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('getBrowse','getView')));
    }
    
    
    public function getBrowse ()
    {
        $mods = Mod::all();
        return View::make("mod.browse")->with("mods",$mods);
    }
    
    public function getNew ()
    {
        return View::make("mod.new");
    }
    
    public function postNew ()
    {
        $data = Input::all();
        $rules["name"] = "required";
        $rules["authors"] = "required";
        $rules["description"] = "required";
        $rules["category"] = "required";
        $rules["tags"] = "required";
        
        $messages = array(
            'tags.required' => 'We strongly recommend using tags for better search-results!',
        );
        
        
        $validator = Validator::make($data,$rules,$messages);
        
        
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
                Alert::add("danger",$message);
            }
            $messages = $validator->messages();
            return Redirect::to("mod/error")->with(array("data"=>$data, "messages"=>$messages, "modify"=>false));
        } else {
            $mod = new Mod;
            $mod->name = $data["name"];
            $mod->author = $data["authors"];
            $mod->description = $data["description"];
            $mod->category = $data["category"];
            $mod->tags = $data["tags"];
            $mod->save();
            $user = Sentry::getUser();
            
            $mod->authors()->attach($user["id"]);
            
            Alert::add("success","Your mod was added!");
            return Redirect::to("mod/browse");
        }
    }
    
    public function getView ($id)
    {
        $mod = Mod::find($id);
        
        try
        {
            $site = Site::where("mod_id","=",$id)->firstOrFail();
        }
        catch (Illuminate\Database\Eloquent\ModelNotFoundException $e)
        {
            return View::make("site.missing")->with("mod",$mod);
        }
        
        return View::make("site.view")->with(array("mod"=>$mod,"site"=>$site));
    }
    
    public function getModify ($id)
    {
        $mod=Mod::find($id);
        $versions=$mod->versions;
        return View::make("mod.modify")->with("mod",$mod);
    }
    
    public function postModify ($id)
    {
        $data = Input::all();
        $rules["name"] = "required";
        $rules["authors"] = "required";
        $rules["description"] = "required";
        $rules["category"] = "required";
        $rules["tags"] = "required";
        
        $messages = array(
            'tags.required' => 'We strongly recommend using tags for better search-results!',
        );
        
        
        $validator = Validator::make($data,$rules,$messages);
        
        
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
                Alert::add("danger",$message);
            }
            
            $messages = $validator->messages();
            return Redirect::to("mod/error/modify")->with(array("data"=>$data, "messages"=>$messages, "modify"=>true, "id"=>$id));
        } else {
            $mod = Mod::find($id);
            $mod->name = $data["name"];
            $mod->author = $data["authors"];
            $mod->description = $data["description"];
            $mod->category = $data["category"];
            $mod->tags = $data["tags"];
            $mod->save();
            
            Alert::add("success","Your mod was updated!");
            return Redirect::to("mod/browse");
        }
    }
    
    
    
    
    public function getError ()
    {
    	
    	
    	
    	//return var_dump(Session::all());
    	return View::make("mod.error")->with(Session::all());
    	
    }
    
}