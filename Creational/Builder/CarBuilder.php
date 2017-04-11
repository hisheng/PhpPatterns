<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 10:23
 */
namespace Pattern\Structural\Builder;

use Pattern\Structural\Builder\Parts\Car;
use Pattern\Structural\Builder\Parts\Door;
use Pattern\Structural\Builder\Parts\Engine;
use Pattern\Structural\Builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function __construct(Car $car){
        $this->car = $car;
    }

    public function addWheel(){
        $this->car->setPart('wheelLF', new  wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine(){
        $this->car->setPart('engine',new Engine());
    }

    public function addDoors(){
        $this->car->setPart('leftDoor',new Door());
        $this->car->setPart('rightDoor',new Door());
        $this->car->setPart('trunkLid',new Door());
    }

    public function getVehicle(){
        return $this->car;
    }
}