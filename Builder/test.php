<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 14:36
 */
require '../vendor/autoload.php';


$direct = new \Pattern\Builder\Director();

$car = $direct->makeCar();

var_dump($car);