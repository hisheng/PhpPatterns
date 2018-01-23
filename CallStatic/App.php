<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2018/1/23
 * Time: 16:17
 */
namespace Pattern\CallStatic;
class App
{
    public static function version()
    {
        var_dump(static::v());
        var_dump(self::v());
    }
    
    public static function v()
    {
        return '2';
    }
}