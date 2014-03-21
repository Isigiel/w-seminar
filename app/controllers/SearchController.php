<?php

class SearchController extends BaseController 
{
    public function getFetch ($id)
    {
        $mods=Mod::lists('name');
        
        foreach ($mods as $i=>$mod)
        {
            $res[$i]=$mod;
        }
        
        return Response::json($res);
    
    }
}