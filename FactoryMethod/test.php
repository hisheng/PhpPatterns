<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 10:22
 */
require '../vendor/autoload.php';


$appleF = new \Pattern\FactoryMethod\AppleFactory();
$carF = new \Pattern\FactoryMethod\CarFactory();

$iphone = $appleF->create();
$benz = $carF->create();

var_dump($iphone,$benz);