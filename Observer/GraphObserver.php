<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:54
 */
namespace Pattern\Observer;
class GraphObserver implements ObserverInterface
{
    public function update(NumberGenerator $generator)
    {
        $c = $generator->getNumber();
        echo "GraphObserver: " ;
        for ($i = 0;$i<$c;$i++)
            echo "*";
        echo "<br/>";
        //sleep(100);
    }
}