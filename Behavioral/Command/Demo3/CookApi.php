<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 13:31
 */
namespace Pattern\Behavioral\Command\Demo3;

interface CookApi
{
    public function cook(string $name);
}