<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 13:06
 */
namespace Pattern\Structural\Builder;
use Pattern\Structural\Builder\Parts\Door;
use Pattern\Structural\Builder\Parts\Engine;
use Pattern\Structural\Builder\Parts\Truck;
use Pattern\Structural\Builder\Parts\Wheel;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function __construct(Truck $truck){
        $this->truck = $truck;
    }

    public function addDoors()
    {
        $this->truck->setPart('leftDoor',new Door());
        $this->truck->setPart('rightDoor',new Door());
    }
    public function addEngine()
    {
        $this->truck->setPart('truckEngine',new Engine());
    }
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}