<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 15:38
 */
namespace Pattern\ChainOfResponsibility;

class Request
{
    private $number;
    
    public function __construct($number)
    {
        $this->number = $number ;
    }
 
    public function getNumber()
    {
        return $this->number;
    }
    
    public function toString()
    {
        return "[Request {$this->number}] ";
    }
    
}