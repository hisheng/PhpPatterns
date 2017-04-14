<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 17:56
 */
namespace Pattern\Behavioral\Command;

class ResetCommand implements Command
{
    private $mainBoard ;
    
    public function __construct(MainBoardApi $mainBoardApi){
        $this->mainBoard = $mainBoardApi;
    }
    
    public function execute(){
        $this->mainBoard->reset();
    }
}