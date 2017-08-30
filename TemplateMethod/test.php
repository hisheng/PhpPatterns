<?php
/**
 * Created by PhpStorm.
 * User: hihsheng
 * Date: 2017/8/30
 * Time: 9:55
 */
require '../vendor/autoload.php';

$red = new \Pattern\TemplateMethod\Red();
$blue = new \Pattern\TemplateMethod\Blue();

$red->print();
$blue->print();

