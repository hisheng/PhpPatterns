<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 16:13
 */
namespace Pattern\Behavioral\Command;
require __DIR__.'/../../vendor/autoload.php';
//增加
$openCommand = new OpenCommand();
$openCommand->addCommand(new GigaMainBoard());

$resetCommand = new ResetCommand();
$resetCommand->restCommand(new GigaMainBoard());

$closeCommand = new CloseCommand();


//在 队列 执行 或者
$openCommand->execute();
$resetCommand->execute();