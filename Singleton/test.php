<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 11:23
 */
require '../vendor/autoload.php';

$first = \Pattern\Singleton\Singleton::getInstance();

var_dump($first);

$second = \Pattern\Singleton\Singleton::getInstance();
var_dump($second);