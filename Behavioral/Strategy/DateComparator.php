<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 10:08
 */
require 'ComparatorInterface.php';
class DateComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);
        
        return $a <=> $b ;
    }
}