<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 14:36
 */
namespace Pattern\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;
    
    protected $category;
    
    abstract public function __clone();
    
    public function getTitle():string
    {
        return $this->title;
    }
    
    public function setTitle(string $title){
        $this->title = $title;
    }
    
}