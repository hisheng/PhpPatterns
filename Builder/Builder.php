<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 14:18
 */
namespace Pattern\Builder;

use Pattern\Builder\Parts\Door;
use Pattern\Builder\Parts\Engine;
use Pattern\Builder\Parts\Wheel;

class Builder
{
    public $car;
    public function __construct()
    {
        $this->car = new Car();
    }
    
    public function addDoor()
    {
        $this->car->addParts('door1',new Door());
        $this->car->addParts('door2',new Door());
        $this->car->addParts('door3',new Door());
        $this->car->addParts('door4',new Door());
    }
    
    public function addWheel()
    {
        $this->car->addParts('wheel1',new Wheel());
        $this->car->addParts('wheel2',new Wheel());
        $this->car->addParts('wheel3',new Wheel());
        $this->car->addParts('wheel4',new Wheel());
    }
    
    public function addEngine()
    {
        $this->car->addParts('engine',new Engine());
    }
    
    public function getResult()
    {
        return $this->car;
    }
}