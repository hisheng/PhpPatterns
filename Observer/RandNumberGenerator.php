<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 17:06
 */

namespace Pattern\Observer;


class RandNumberGenerator extends NumberGenerator
{
    private $number;
    
    public function getNumber()
    {
        return $this->number;
    }
    
    public function execute()
    {
         for ($i = 0;$i<3;$i++)
         {
             $this->number = rand(1,100);
             $this->notifyObserver();
         }
    }
}