<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 15:58
 */
namespace Pattern\Behavioral\Command;

class GigaMainBoard implements MainBoardApi
{
    public function open(){
        echo '1 技嘉主板现在正在开机，请等候';
        echo '2 接通电源...';
        echo '3 设备检查...';
        echo '4 装载系统......';
        echo '5 机器正常运转起来了......';
        echo '6 机器已经正常打开，请操作';
    }
    public function resert(){
        echo 'reset';
    }
    
    public function close(){
        echo 'close';
    }
}