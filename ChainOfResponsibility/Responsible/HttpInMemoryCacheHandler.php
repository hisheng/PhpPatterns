<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 18:32
 */
namespace Pattern\ChainOfResponsibility\Responsible;
use Pattern\ChainOfResponsibility\Handler;
use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    private $data;

    public function __construct(array $data ,Handler $successor = null){
        parent::__construct($successor);
        $this->data = $data;
    }

    protected function processing(RequestInterface $request){
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if($request->getMethod() == 'GET' && isset($this->data[$key])){
            return $this->data[$key];
        }

        return null;
    }
}