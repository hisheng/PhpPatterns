<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2018/1/23
 * Time: 16:16
 */
namespace Pattern\CallStatic;

class Facade
{
    public static function __callStatic($method, $args)
    {
        // TODO: Implement __callStatic() method.
        return App::$method(...$args);
    }
    
    public static function v()
    {
        return '1';
    }
}