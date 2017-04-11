<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 13:16
 */
require __DIR__.'/../../vendor/autoload.php';

use Pattern\Structural\Builder\Director;
use Pattern\Structural\Builder\CarBuilder;
use Pattern\Structural\Builder\Parts\Car;


$car = new Director(new CarBuilder(new Car()));
var_dump($car);