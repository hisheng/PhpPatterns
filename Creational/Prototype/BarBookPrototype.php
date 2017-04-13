<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 14:55
 */
namespace Pattern\Creational\Prototype;

class BarBookPrototype  extends BookPrototype
{
    protected $category = 'Bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}