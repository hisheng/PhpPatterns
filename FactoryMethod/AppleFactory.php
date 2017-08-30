<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 10:21
 */
namespace Pattern\FactoryMethod;
class AppleFactory extends Factory
{
    public function create()
    {
        return new Apple();
    }
}