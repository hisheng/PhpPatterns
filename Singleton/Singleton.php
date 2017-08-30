<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 11:18
 */
namespace Pattern\Singleton;

class Singleton
{
    private static $instance;
    
    /**
     * Prevent direct object creation
     */
    final private function  __construct() { }
    
    /**
     * Prevent object cloning
     */
    final private function  __clone() { }
    
    public static function getInstance()
    {
        if(null == static::$instance)
            static::$instance = new static();
        return static::$instance;
    }
}