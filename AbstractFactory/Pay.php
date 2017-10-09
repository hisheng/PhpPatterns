<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/10/9
 * Time: 15:33
 */
namespace Pattern\AbstractFactory;
abstract class Pay
{
    const MONEY = '100元';
    const ALIPAY = 'alipay';
    const WECHATPAY = 'wechat';
    
    abstract function buy();
    abstract function make($gateWay);
    abstract function refund();
}