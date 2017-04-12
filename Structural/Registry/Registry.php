<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/12
 * Time: 14:23
 */
abstract class Registry
{
    const LOGGER = 'logger';
    
    private static $storedValues = [];
    
    private static $allowedKeys = [
        self::LOGGER
    ];
    
    public static function set(string $key ,$value){
        if(!in_array($key,self::$allowedKeys)){
            throw new InvalidArgumentException('invalid key given');
        }
        self::$storedValues[$key] = $value;
    }
    
    public static function get(string $key){
        if(!in_array($key,self::$allowedKeys) || !isset(self::$storedValues[$key])){
            throw new InvalidArgumentException('invalid key given');
        }
        return self::$storedValues[$key];
    }
}

$key = Registry::LOGGER;
$logger = new stdClass();

Registry::set($key,$logger);

var_dump(Registry::get($key));