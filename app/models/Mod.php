<?php
    class Mod extends Eloquent
    {
        public function versions()
        {
            return $this->hasMany('Modversion');
        }
        
        public function authors()
	    {
	        return $this->belongsToMany('User', 'modAuthors');
	    }
	    
	    public function followers()
	    {
	        return $this->belongsToMany('User', 'followers');
	    }
    }