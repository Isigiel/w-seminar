<?php

class ConceptController extends BaseController 
{
    public function getLayout ()
    {
        return View::make('base.layout');
    }
    
    public function getModsub ()
    {
        Alert::add("warning","DEBUG || ConceptController was used!");
        return Redirect::to("mod/new");
    }
    
    public function getBrowse ()
    {
        Alert::add("warning","DEBUG || ConceptController was used!");
        return Redirect::to("mod/browse");
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
        Alert::add("warning","DEBUG || ConceptController was used!");
        return Redirect::to("register");
    }
    
    public function getBlog ()
    {
        return View::make('concept.blog');
    }
}