<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 10:37
 */
require '../vendor/autoload.php';

$s = new \Pattern\Decorator\StringDisplay('hello,world.');
$sb = new \Pattern\Decorator\SideBorderDecorator($s,'#');
$fb = new \Pattern\Decorator\FullBorderDecorator($sb);

$s->show();
$sb->show();
$fb->show();