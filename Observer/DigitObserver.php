<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:54
 */
namespace Pattern\Observer;

class DigitObserver implements ObserverInterface
{
    public function update(NumberGenerator $generator)
    {
        echo "DigitObserver :" .$generator->getNumber();
        echo "<br/>";
        
        //sleep(100);
    }
}