<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:09
 */
namespace Pattern\ChainOfResponsibility;
class OddHandle extends Handle
{
    public function resolve(Request $request)
    {
        if(($request->getNumber() % 2) == 1)
            return true;
        else
            return false;
    }
}