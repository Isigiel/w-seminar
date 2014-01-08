<?php
    class Mod extends Eloquent
    {
        public function versions()
        {
            return $this->hasMany('Modversion');
        }
    }