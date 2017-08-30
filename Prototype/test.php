<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 13:56
 */
require '../vendor/autoload.php';

$i = 5;
$book = new \Pattern\Prototype\BookPrototype();
var_dump($book->num,$book->name);
while ($i > 0){
    $a = clone $book;
    var_dump($a->num,$a->name);
    $i--;
}
