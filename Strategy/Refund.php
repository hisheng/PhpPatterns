<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 18:21
 */
namespace Pattern\Strategy;
class Refund
{
    public $gateway;
    
    public function __construct(Strategy $strategy)
    {
        $this->gateway = $strategy;
    }
    
    public function redund()
    {
        $this->gateway->refund();
    }
}