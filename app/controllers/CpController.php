<?php

class CpController extends BaseController 
{
    
    //Controller Filters
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('')));
    }
    
    public function getIndex ()
    {
    	$user = Sentry::getUser();
        
        $mods=DB::select("	SELECT *
         					FROM modAuthors a, mods m 
         					WHERE a.user_id = ?
         					AND a.mod_id = m.id", array($user["id"]));
         					
        if (count($mods) == 0)
        	$mods=false;
        	
        	
       	return View::make("cp.main")->with(array("mods"=>$mods,"user"=>$user));
    	
    }
    
    public function getTest ()
    {
        $post='{
                "agent": {
                "name": "Minecraft",
                "version": 1
                },
            "username": "l1uka4s@live.de",
            "password": "lu2110"}';
        
        $data_string = $post;                                                                                   
 
        $ch =   curl_init('https://authserver.mojang.com/authenticate');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                'Content-Type: application/json',                                                                                
                'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   
        $result = curl_exec($ch);
        $res=json_decode($result);
        return Response::json($res);
    }
    
}