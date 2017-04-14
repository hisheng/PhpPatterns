<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 12:06
 */
namespace Pattern\Behavioral\Command\demo2;
class AddCommand implements Command
{
    private $operation;
    
    private $openNum;
    
    public function execute()
    {
         $this->operation->add($this->openNum);
    }
    
    public function __construct(OperationApi $operationApi,$openNum){
        $this->operation = $operationApi;
        $this->openNum = $openNum ;
    }
    
    public function undo()
    {
        $this->operation->substract($this->openNum);
    }
}