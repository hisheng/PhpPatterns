<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 17:28
 */
namespace Pattern\Adapter;
class English
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function speak()
    {
        var_dump('hello '.$this->name);
    }
    
}