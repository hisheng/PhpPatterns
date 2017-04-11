<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 10:27
 */
namespace Pattern\Structural\Builder\Parts;

abstract class Vehicle
{
    protected $parts = [];

    public function setPart($part,$value){
        $this->parts[$part] = $value;
    }
}