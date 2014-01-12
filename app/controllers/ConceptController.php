<?php

class ConceptController extends BaseController 
{
    public function getLayout ()
    {
        return View::make('concept.base.layout');
    }
    
    public function getModsub ()
    {
        return View::make('concept.ModSubmission');
    }
    
    public function getBrowse ()
    {
        return View::make('concept.browse');
    }
    
    public function getSite ()
    {
        return View::make('concept.site');
    }
    
    public function getVexatos ()
    {
        return View::make('concept.vexatos');
    }
}