<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 13:14
 */
namespace Pattern\Creational\Builder;

class Director
{
    public function build(BuilderInterface $build){
        $build->addDoors();
        $build->addWheel();
        $build->addEngine();

        return $build->getVehicle();
    }
}