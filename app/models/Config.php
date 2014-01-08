<?php
    class Config extends Eloquent
    {
        
        public function version()
        {
            return $this->belogsTo('Modversion');
        }
    }