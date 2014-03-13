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
        
        if(!$res=$this->updateMod($data))
            return Redirect::to("mod/browse");
        else
            return View::make("mod.modify")->with($res);
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
        return View::make("mod.modify")->with(array("mod"=>$mod,"error"=>false));
    }
    
    public function postModify ($id)
    {
        $data = Input::all();
        
        if(!$res=$this->updateMod($data,$id))
            return Redirect::to("mod/browse");
        else
            return View::make("mod.modify")->with($res);
    }
    
    public function updateMod($data, $id=false)
    {
        //Validate Inputs
        $rules["name"] = "required";
        $rules["authors"] = "required";
        $rules["description"] = "required";
        $rules["category"] = "required";
        $rules["tags"] = "required";
        
        $messages = array(
            'tags.required' => 'We strongly recommend using tags for better search-results!',
        );
        
        $validator = Validator::make($data,$rules,$messages);
        
        //handle Validation result
        if ($validator->fails())
        {
            $messages = $validator->messages();
            return array("data"=>$data, "messages"=>$messages, "modify"=>true, "id"=>$id, "error"=>true);
        } else {
            if ($id)
                $mod = Mod::find($id);
            else
                $mod = new Mod;
            
                $mod->name = $data["name"];
                $mod->author = $data["authors"];
                $mod->description = $data["description"];
                $mod->category = $data["category"];
                $mod->tags = $data["tags"];
            
                $mod->save;
            
                if($id)
                    Alert::add("success","Your mod was updated!");
                else
                    Alert::add("success","Your mod was created!");
                
                return false;
        }
        
        
    }  
    
}