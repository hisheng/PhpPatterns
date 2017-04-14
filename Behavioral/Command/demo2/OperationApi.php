<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 10:42
 */
namespace Pattern\Behavioral\Command\demo2;
interface OperationApi
{
    public function getResult();
    
    public function setResult(int $result);
    
    public function add(int $num);
    
    public function substract(int $num);
}