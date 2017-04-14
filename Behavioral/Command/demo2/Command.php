<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 12:04
 */
namespace Pattern\Behavioral\Command\demo2;
interface Command
{
    public function execute();
    
    public function undo();
}