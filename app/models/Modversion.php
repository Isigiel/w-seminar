<?php
    class Modversion extends Eloquent
    {
        public function changelogs()
        {
            return $this->hasMany('Chnagelog');
        }
        
        public function configs()
        {
            return $this->hasMany('Config');
        }
        
        public function mod()
        {
            return $this->belogsTo('Mod');
        }
    }