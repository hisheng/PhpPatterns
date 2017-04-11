<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 13:16
 */
require __DIR__.'/../../vendor/autoload.php';

use Pattern\Creational\Builder\Director;
use Pattern\Creational\Builder\CarBuilder;
use Pattern\Creational\Builder\Parts\Car;


$car = new Director(new CarBuilder(new Car()));
var_dump($car);