<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 11:16
 */
require 'ComparatorInterface.php';
class IdComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        // TODO: Implement compare() method.
        return $a['id'] <=> $b['id'];
    }
}