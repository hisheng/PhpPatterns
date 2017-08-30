<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 10:22
 */
namespace Pattern\FactoryMethod;
class CarFactory extends Factory
{
    public function create()
    {
        return new Benz();
    }
}