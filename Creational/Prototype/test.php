<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 14:59
 */
namespace Pattern\Creational\Prototype;

require __DIR__.'/../../vendor/autoload.php';

$foo = new FooBookPrototype();

for ($i = 0 ; $i < 10 ; $i ++){
    $book = clone $foo;
    var_dump($foo);
}