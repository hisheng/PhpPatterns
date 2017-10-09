<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/10/9
 * Time: 15:41
 */
namespace Pattern\AbstractFactory;

class PayFactory extends Pay
{
    private $gateWay;
    public function buy(){
        var_dump($this->gateWay. 'buy');
    }
    public function make($gateWay)
    {
        $this->gateWay = $gateWay;
        switch ($gateWay) {
            case self::ALIPAY:
                return new AliPay();
            case self::WECHATPAY:
                return new WechatPay();
            default:
                return new AliPay();
        }
    }
    public function refund()
    {
        var_dump($this->gateWay. 'refund');
    }
}