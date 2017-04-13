<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 13:49
 */
namespace Pattern\Creational\Singleton;

class Singleton
{
    private static $instance;
    
    public $friends = [];
    
    public static function getInstance(){
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }
    
        return static::$instance;
    }
    
    public function setFriend(string $name){
        $this->friends[] = $name;
    }
    
    
}