<?php
    class Changelog extends Eloquent
    {
        public function version()
        {
            return $this-> belogsTo('Modversion');
        }
    }