<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 17:39
 */

require '../vendor/autoload.php';

$chinese = new \Pattern\Adapter\Chinese('海生');
$chinese->speak();//'你好 海生'
$chinese->speakEnglish();//'hello hisheng'