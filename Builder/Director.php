<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 14:26
 */
namespace Pattern\Builder;
class Director
{
    public $carBuilder;
    public function __construct()
    {
        $this->carBuilder = new Builder();
    }
    
    public function makeCar()
    {
        $this->carBuilder->addDoor();
        $this->carBuilder->addWheel();
        $this->carBuilder->addEngine();
        return $this->carBuilder->getResult();
    }
}
