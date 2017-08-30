<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 14:24
 */
namespace Pattern\Builder;
class Car
{
    public $parts;
    
    public function addParts($k,$v){
        $this->parts[$k] = $v;
    }
}