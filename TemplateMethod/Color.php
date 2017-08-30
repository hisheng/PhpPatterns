<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 9:47
 */
namespace Pattern\TemplateMethod;

abstract class Color
{
    protected $name ;
    
    public function getName()
    {
        return $this->name;
    }
    
    abstract function print();
    
    
}