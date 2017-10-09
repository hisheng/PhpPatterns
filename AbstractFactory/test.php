<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/10/9
 * Time: 15:52
 */
require '../vendor/autoload.php';

$payFactory = new \Pattern\AbstractFactory\PayFactory();
$pay = $payFactory->make('wechat'); 
var_dump($pay);