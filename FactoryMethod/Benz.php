<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 10:17
 */
namespace Pattern\FactoryMethod;
class Benz implements Product
{
    public $name;
    public function __construct()
    {
        $this->setProductName();
    }
    
    public function setProductName()
    {
        $this->name = 'Benz Car';
    }
}