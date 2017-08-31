<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:52
 */
namespace Pattern\Observer;
interface ObserverInterface
{
    public function update(NumberGenerator $generator);
}