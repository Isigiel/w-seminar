<?php

class VersionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$format=Input::file('file')->getMimeType();
    	if ($format != "application/jar" && $format != "application/zip")
    	{
    		Alert::add("danger","File-Format $format not accepted.");
    		return Redirect::back();
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
            return Redirect::back();
        }
        
        if ($format == "application/jar")
        	$type="jar";
        else
        	$type="zip";
    	
    	$path=public_path()."/repo/mods/";
    	$hash=md5(Input::file('file'));
    	$number=Input::get("version");
    	
    	$version = new Modversion;
    	$version->mod_id=Input::get("mod_id");
    	$version->version=Input::get("version");
    	$version->mc_version=Input::get("mc_version");
    	$version->stability=Input::get("stability");
    	$version->path=$path.$hash;
    	$version->downloads=0;
    	$version->type=$type;
    	$version->save();
    	
    	Input::file('file')->move(public_path()."/repo/mods/", $hash);
    	Alert::add("success","Version $number was added.");
    	
    	return Redirect::back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$version=Modversion::find($id);
    	$version->downloads=$version->downloads+1;
    	$version->save();
    	
    	$mod=$version->mod;
    	$event = Event::fire('mod.download', array($mod));

    	$name=$version->mod["name"]."_".$version["mc_version"]."_".$version["version"].".".$version["type"];
    	$path=$version["path"];
    	
    	return Response::download($path, $name);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$version=Modversion::find($id);
    	$path=$version["path"];
    	$mod_id=$version->mod["id"];
    	$version_number=$version["version"];
    	Modversion::destroy($id);
    	
    	if(!unlink($path))
    		Alert::add("danger","Version $version_number was deleted, but file is still existing.");
    	
    	Alert::add("success","Version $version_number was deleted.");
		return Redirect::back();
	}


}
