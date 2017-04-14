<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 15:57
 */
namespace Pattern\Behavioral\Command;

interface MainBoardApi
{
    public function open();
    public function resert();
    public function close();
}