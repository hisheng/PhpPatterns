<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 18:13
 */
namespace Pattern\Behavioral\Command;

class CloseCommand implements Command
{
    private $mainBoard ;
    
    public function addCommand(MainBoardApi $mainBoardApi){
        $this->mainBoard = $mainBoardApi;
    }
    public function execute()
    {
        // TODO: Implement execute() method.
        $this->mainBoard->close();
    }
}