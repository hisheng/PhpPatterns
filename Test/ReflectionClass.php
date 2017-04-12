<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 15:51
 */

class AppClassDefault{
     public   $names = 'name is app';
}

$app = new ReflectionClass('AppClassDefault');

var_dump($app);
var_dump($app->name);

