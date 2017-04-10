<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 18:38
 */
namespace Pattern\ChainOfResponsibility\Responsible;

use Pattern\ChainOfResponsibility\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request){
        return 'Hello World!';
    }
}