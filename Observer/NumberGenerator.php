<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:59
 */
namespace Pattern\Observer;
abstract class NumberGenerator
{
    private $observers = [];
    
    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }
    
    public function deleteObserver(ObserverInterface $observer)
    {
    
    }
    
    public function notifyObserver()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
    
    abstract public function getNumber();
    abstract public function execute();
    
    
}