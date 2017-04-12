<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/12
 * Time: 13:42
 */
class countAb implements Countable
{
    public function count():int
    {
        return 1;
    }
}
$a = new countAb();
echo $a->count();
