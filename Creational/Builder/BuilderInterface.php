<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 10:11
 */
namespace Pattern\Creational\Builder;

interface BuilderInterface
{
    //public function createVehicle(); 通过依赖注入

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle();
}