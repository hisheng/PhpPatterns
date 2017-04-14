<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 16:08
 */
namespace Pattern\Behavioral\Command;
class OpenCommand implements Command {
    
    private $mainBoard ;
    
    public function addCommand(MainBoardApi $mainBoardApi){
        $this->mainBoard = $mainBoardApi;
    }
    
    public function execute()
    {
        // TODO: Implement execute() method.
        $this->mainBoard->open();
    }
}