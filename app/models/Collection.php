<?php
class Collection extends Eloquent
{
    public function modversions () {
        return $this->belongsToMany('Modversion');
    }

    public function mods () {
        return $this->hasManyThrough('Mod','Modversion');
    }

    public function author () {
        return $this->belongsTo('User');
    }
}