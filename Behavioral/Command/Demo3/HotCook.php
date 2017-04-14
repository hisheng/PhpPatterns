<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 13:32
 */
namespace Pattern\Behavioral\Command\Demo3;

class HotCook implements CookApi
{
    public function cook(string $name)
    {
        // TODO: Implement cook() method.
        echo 'cooking Hot';
    }
}
