<?php
/**
 * Created by PhpStorm.
 * User: miki
 * Date: 2016-6-15
 * Time: 21:52
 */

class Registry
{
    private $store = array();

    public function getClass($key){
        return $this->store[$key];
    }

    public function setClass($key, $obj){
        $this->store[$key] = $obj;
    }
}