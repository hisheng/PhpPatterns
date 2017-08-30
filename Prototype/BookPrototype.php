<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 13:55
 */
namespace Pattern\Prototype;
class BookPrototype
{
    public $num = 0;
    public $name = 'real';
    
    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->num  = $this->num + 1;
        $this->name = 'copy';
        
    }
}