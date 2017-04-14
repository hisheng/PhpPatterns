<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 15:26
 *///命令处理接口
interface ICommand {
    function onCommand($name,$args);
}
//命令控制类
class CommandChain {
    private $_commands = array();
    public function addCommand($cmd) {
        $this->_commands[]=$cmd;
    }
    public function runCommand($name,$args) {
        foreach ($this->_commands as $cmd) {
            //如果执行命令成功就退出循环
            if ($cmd->onCommand($name,$args))
                return;
        }
    }
}
//实现ICommand的具体命令类UserCommand
class UserCommand implements ICommand {
    public function onCommand($name,$args) {
        if ($name != 'user') {
            return false;
        } else {
            echo ("command: $name");
            return true;
        }
    }
}
//实现ICommand的具体命令类MailCommand
class MailCommand implements ICommand {
    public function onCommand($name,$args) {
        if ($name != 'email') {
            return false;
        } else {
            echo ("email: $name");
            return true;
        }
    }
}

$cc = new CommandChain();
$cc->addCommand(new UserCommand());
$cc->addCommand(new MailCommand());


$cc->runCommand('user',null);
$cc->runCommand('email',null);