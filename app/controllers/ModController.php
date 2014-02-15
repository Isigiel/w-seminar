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
        return View::make("browse")->with("mods",$mods);
    }
    
    public function getNew ()
    {
        return View::make("modSubmission");
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
            return Redirect::to("mod/new");
        } else {
            $mod = new Mod;
            $mod->name = $data["name"];
            $mod->author = $data["authors"];
            $mod->description = $data["description"];
            $mod->category = $data["category"];
            $mod->tags = $data["tags"];
            $mod->save();
            $user = Sentry::getUser();
            DB::table('user_mods')->insert(
                array('user_id' => $user["id"], 'mod_id' => $mod["id"])
            );
            Alert::add("success","Your mod was added!");
            return Redirect::to("mod/browse");
        }
    }
    
    public function getView ($id)
    {
        $mod = Mod::find($id);
        
        try
        {
            $site = Site::where("mod-id","=",$id)->firstOrFail();
        }
        catch (Illuminate\Database\Eloquent\ModelNotFoundException $e)
        {
            return View::make("noSite")->with("mod",$mod);
        }
        
        return View::make("site")->with(array("mod"=>$mod,"site"=>$site));
    }
    
}