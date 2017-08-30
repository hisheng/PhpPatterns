<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/30
 * Time: 18:19
 */
namespace Pattern\Strategy;
class WeichatStrategy implements Strategy
{
    public function refund()
    {
        echo '微信 退款';
    }
}