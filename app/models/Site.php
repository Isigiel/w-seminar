<?php
    class Site extends Eloquent
    {
        public function mod()
        {
            return $this->belongsTo('Mod');
        }
        
        public function blogentrys()
        {
            return $this->hasMany("Blogentry");
        }
        
        public function authors()
	{
	    return $this->belongsToMany('User', 'siteAuthors');
	}
    }