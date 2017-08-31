<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:10
 */
namespace Pattern\ChainOfResponsibility;
class SpecialHandle extends Handle
{
    private $number;
    public function __construct($name,$number)
    {
        parent::__construct($name);
        $this->number = $number;
    }
    
    public function resolve(Request $request)
    {
        if($request->getNumber()  == $this->number)
            return true;
        else
            return false;
    }
}