<?php

class ModController extends BaseController 
{
    
    //Controller Filters
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('getBrowse','getView','getDownload')));
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
        
        $versions=false;
        
        $versions=$mod->versions->toArray();
        
        foreach ($versions as $i=>$version)
        {
        	$num=$version["id"];
        	$versions[$i]["link"]=URL::to("mod/download/$num");
        }
		
		//return dd($versions);
        	
		if (Site::where("mod_id",$id)->exists())
            $site = Site::where("mod_id",$id)->first();
        else
        	return View::make("site.missing")->with("mod",$mod);
        	
        return View::make("site.view")->with(array("mod"=>$mod,"site"=>$site,"versions"=>$versions ));
    }
    
    public function getModify ($id)
    {
        $standart="##Style your site using markdown! 
For more information check out:
 * [Markdown guide](http://daringfireball.net/projects/markdown/syntax)
 * [Github flavored markdown](https://help.github.com/articles/github-flavored-markdown)";
        
        $mod=Mod::find($id);
        $versions=false;
        $site=false;
        $site=Site::where("mod_id",$id)->first()["content"];
        $versions=$mod->versions;
        
        foreach ($versions as $i=>$version)
        {
        	$id=$version["id"];
        	$versions[$i]["link"]=URL::to("mod/download/$id");
        }
        
        return View::make("mod.modify")->with(array("mod"=>$mod,"error"=>false, "versions"=>$versions, "site"=>$site, "standart"=>$standart));
    }
    
    public function getDownload ($id)
    {
    	$version=Modversion::find($id);
    	$version->downloads=$version->downloads+1;
    	$version->save();
    	
    	$name=$version->mod["name"]."_".$version["mc_version"]."_".$version["version"].".".$version["type"];
    	$path=$version["path"];
    	
    	return Response::download($path, $name);
    }
    
    public function getDeleteVersion ($id)
    {
    	$version=Modversion::find($id);
    	$path=$version["path"];
    	$mod_id=$version->mod["id"];
    	$version_number=$version["version"];
    	Modversion::destroy($id);
    	
    	if(!unlink($path))
    		Alert::add("danger","Version $version_number was deleted, but file is still existing.");
    	
    	Alert::add("success","Version $version_number was deleted.");
    	
    	return Redirect::to("mod/modify/$mod_id");
    }
    
    public function postModify ($id)
    {
        $data = Input::all();
        
        if(!$res=$this->updateMod($data,$id))
            return Redirect::to("mod/browse");
        else
            return View::make("mod.modify")->with($res);
    }
    
    public function postAddVersion ($id)
    {
    	//$file=$_POST["file"];
    	$format=Input::file('file')->getMimeType();
    	if ($format != "application/jar" && $format != "application/zip")
    	{
    		Alert::add("danger","File-Format $format not accepted.");
    		return Redirect::to("mod/modify/$id");
    	}
    	
    	$data=Input::all();
    	
    	//Validate Inputs
        $rules["version"] = "required";
        $rules["mc_version"] = "required";
        $rules["stability"] = "required";
        
        $validator = Validator::make($data,$rules);
        
        //handle Validation result
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
            	Alert::add("danger",$message);
            }
            Alert::add("danger", "Form problem!");
            return Redirect::to("mod/modify/$id");
        }
        
        if ($format == "application/jar")
        	$type="jar";
        else
        	$type="zip";
    	
    	$path=public_path()."/repo/mods/";
    	$hash=md5(Input::file('file'));
    	$number=Input::get("version");
    	
    	$version = new Modversion;
    	$version->mod_id=$id;
    	$version->version=Input::get("version");
    	$version->mc_version=Input::get("mc_version");
    	$version->stability=Input::get("stability");
    	$version->path=$path.$hash;
    	$version->downloads=0;
    	$version->type=$type;
    	$version->save();
    	
    	Input::file('file')->move(public_path()."/repo/mods/", $hash);
    	Alert::add("success","Version $number was added.");
    	
    	return Redirect::to("mod/modify/$id");
    }
    
    ////////////////////////////////////////////////////////////////////////
    //////////////////////internal Functions////////////////////////////////
    ////////////////////////////////////////////////////////////////////////
    private function updateMod($data, $id=false)
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