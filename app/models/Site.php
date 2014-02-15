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
    }