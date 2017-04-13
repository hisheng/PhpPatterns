<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 13:27
 */

require 'ComparatorInterface.php';
require 'IdComparator.php';
require 'DateComparator.php';
require 'ObjectCollection.php';

$collection = [
    [
        [['id' => 2], ['id' => 1], ['id' => 3]],
        ['id' => 1],
    ],
    [
        [['id' => 3], ['id' => 2], ['id' => 1]],
        ['id' => 1],
    ],
];

$obj = new ObjectCollection($collection);
$obj->setComparator(new IdComparator());
$elements = $obj->sort();

$firstElement = array_shift($elements);
var_dump($firstElement);