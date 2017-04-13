<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 14:40
 */
class SubObject
{
    public $a = 1;
    
    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->a = ++ $this->a;
    }
}

class MyObject extends SubObject
{
    public function __clone()
    {
    
    }
}

$sub = new SubObject();
for ($i=1 ;$i<5;$i++){
    $a = clone $sub;
}


$b = &$sub;
$b->a = 333;


var_dump($a);
var_dump($sub);
var_dump($b);

