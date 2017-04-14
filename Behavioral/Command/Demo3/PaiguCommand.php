<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/14
 * Time: 13:50
 */
namespace Pattern\Behavioral\Command\Demo3;

class PaiguCommand implements Command
{
    private $cooker;
    public function __construct(CookApi $cookApi)
    {
        $this->cooker = $cookApi;
    }
    
    public function handle()
    {
        // TODO: Implement handle() method.
        $this->cooker->cook('排骨汤');
    }
}