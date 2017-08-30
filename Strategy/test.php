<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 18:23
 */
require '../vendor/autoload.php';


$alirefund = new \Pattern\Strategy\Refund(new \Pattern\Strategy\AliStrategy());
$alirefund->redund();

$wechatrefund = new \Pattern\Strategy\Refund(new \Pattern\Strategy\WeichatStrategy());
$wechatrefund->redund();
