<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 05.06.14
 * Time: 22:11
 */
class CollectionController extends BaseController
{

    // Controller Filters
    public function __construct() {
        $this->beforeFilter('auth', array('except' => array('')));
    }

}