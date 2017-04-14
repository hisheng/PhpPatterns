<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 13:16
 */
namespace Pattern\Behavioral\Command\demo2;
class SubstractCommand implements Command
{
    private $opeNum;
    private $operation;
    
    public function __construct(OperationApi $operationApi , $openum)
    {
        $this->operation = $operationApi;
        $this->opeNum = $openum;
    }
    
    public function undo()
    {
        // TODO: Implement undo() method.
        $this->operation->add($this->opeNum);
    }
    
    public function execute()
    {
        $this->operation->substract($this->opeNum);
    }
}