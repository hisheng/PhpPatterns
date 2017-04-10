<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 17:57
 */
namespace Pattern\ChainOfResponsibility;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    private $successor = null;

    public function __construct(Handler $handler){
        $this->successor = $handler;
    }

    final public function handle(RequestInterface $request){
        $processed = $this->processing($request);
        if($processed === null){
            if($this->successor !== null){
                $processed = $this->successor->handle($request);
            }
        }
        return $processed;
    }

    abstract protected function processing(RequestInterface $request);
}

