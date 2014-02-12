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
    
    public function getSiteedit ()
    {
        return View::make('concept.siteedit');
    }
    
    public function getMarkdown ()
    {
        return View::make('concept.markdown');
    }
    
    public function getRegister ()
    {
        return View::make('concept.register');
    }
    
    public function getBlog ()
    {
        return View::make('concept.blog');
    }
}