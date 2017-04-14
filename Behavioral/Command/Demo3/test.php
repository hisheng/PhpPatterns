<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 13:52
 */
namespace Pattern\Behavioral\Command\Demo3;
require __DIR__.'/../../vendor/autoload.php';


//增加点单
$bjCommand = new BeijingKaoyaCommand(new CoolCook());
$pgCommand = new PaiguCommand(new HotCook());

//厨师烧菜
$bjCommand->handle();
$pgCommand->handle();
