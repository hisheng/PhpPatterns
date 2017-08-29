<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 16:49
 */
require '../vendor/autoload.php';

$bookShelf = new \Pattern\Iterator\BookShelf();
$bookShelf->add(new \Pattern\Iterator\Book('php '));
$bookShelf->add(new \Pattern\Iterator\Book('python '));
$bookShelf->add(new \Pattern\Iterator\Book('java '));
$bookShelf->add(new \Pattern\Iterator\Book('c++ '));
$bookShelf->add(new \Pattern\Iterator\Book('c '));
$bookShelf->add(new \Pattern\Iterator\Book('javascript '));

$iterator = $bookShelf->iterator();
for ($i=0 ;$i<5;$i++)
{
    var_dump("------- {$i} ------");
    var_dump('current',$iterator->current());
    var_dump('next',$iterator->next());
    var_dump("------- end ------");
}