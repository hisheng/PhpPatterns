<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 10:27
 */
namespace Pattern\Creational\Builder\Parts;

abstract class Vehicle
{
    protected $parts = [];

    public function setPart($part,$value){
        $this->parts[$part] = $value;
    }
}