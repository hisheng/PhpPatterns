<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 17:14
 */
namespace Pattern\Observer;

require '../vendor/autoload.php';


$number = new RandNumberGenerator();

$observer1 = new DigitObserver();
$observer2 = new GraphObserver();

$number->addObserver($observer1);
$number->addObserver($observer2);
$number->execute();

