<?php
    class Blogentry extends Eloquent
    {
        public function author()
	{
	    return $this->belogsTo('User');
	}
    }