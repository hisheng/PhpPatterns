<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 14:56
 */
namespace Pattern\Creational\Prototype;
class FooBookPrototype extends BookPrototype
{
    protected $i = 0;
    protected $category = 'Foo';
    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->i = ++ $this->i;
    }
}