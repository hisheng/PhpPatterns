<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:05
 */
namespace Pattern\ChainOfResponsibility;

class NoHandle extends Handle
{
     public function resolve(Request $request)
     {
         return false;
     }
}