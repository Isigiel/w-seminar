<?php
class Collection extends Eloquent
{
    public function modversions () {
        return $this->belongsToMany('Modversion');
    }

    public function mods () {
        return $this->belongsToMany('Mod');
    }

    public function author () {
        return $this->belongsTo('User');
    }
}