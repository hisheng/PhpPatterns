<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 13:52
 */
namespace Pattern\Creational\Singleton;
require __DIR__.'/../../vendor/autoload.php';


$first = Singleton::getInstance();
$first->setFriend('hisheng');
var_dump($first);

$sec = Singleton::getInstance();
var_dump($sec);
