<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 10:48
 */
namespace Pattern\Behavioral\Command\demo2;
class Operation implements OperationApi
{
    private $result;
    public function add(int $num)
    {
        // TODO: Implement add() method.
        $this->result += $num;
    }
    
    public function substract(int $num)
    {
        $this->result -= $num;
    }
    
    public function setResult(int $result)
    {
        // TODO: Implement setResult() method.
        $this->result = $result;
    }
    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->result;
    }
}