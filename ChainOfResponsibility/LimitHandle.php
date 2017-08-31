<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:06
 */
namespace Pattern\ChainOfResponsibility;
class LimitHandle extends Handle
{
    private $limit;
    public function __construct($name,$limit)
    {
        parent::__construct($name);
        $this->limit = $limit;
    }
    
    public function resolve(Request $request)
    {
        if($request->getNumber() < $this->limit)
            return true;
        else
            return false;
    }
}