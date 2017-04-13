<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 13:59
 */
namespace Pattern\Creational\Singleton;
require __DIR__.'/../../vendor/autoload.php';

$third = Singleton::getInstance();
var_dump($third);