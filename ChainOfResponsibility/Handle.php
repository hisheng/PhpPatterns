<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 15:33
 */
namespace Pattern\ChainOfResponsibility;

abstract class Handle
{
    private $name = '';
    private $next;
    public function __construct($name)
    {
        $this->name = $name ;
    }
    
    public function setNext(Handle $next)
    {
        $this->next = $next;
        return $next;
    }
    
    //解决的 步骤 责任链
    public function support(Request $request)
    {
        if($this->resolve($request))
            $this->done($request);
        elseif($this->next != null)
            $this->next->support($request);
        else
            $this->fail($request);
            
    }
    
    public function toString()
    {
        return "[ {$this->name} ]";
    }
    
    public abstract function resolve(Request $request);
    
    public function done(Request $request)
    {
        echo $request->toString() . "is resolved by " . $this->toString() . '.';
        echo "<br/>";
    }
    public function fail(Request $request)
    {
        echo $request->toString() . "can not be resolved  " . $this->toString() . '.';
        echo "<br/>";
    }
}
