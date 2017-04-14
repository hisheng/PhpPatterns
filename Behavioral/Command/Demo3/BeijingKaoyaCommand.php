<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 13:40
 */
namespace Pattern\Behavioral\Command\Demo3;

class BeijingKaoyaCommand implements Command
{
    private $cooker;
    
    public function __construct(CookApi $cookApi)
    {
        $this->cooker = $cookApi;
    }
    
    public function handle()
    {
        $this->cooker->cook('北京烤鸭');
    }
}