<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 10:13
 */
namespace Pattern\Decorator;
abstract class BorderDecorator implements Display
{
    protected $display;
    
    public function __construct(Display $display)
    {
        $this->display = $display;
    }
    
    public function show()
    {
        for ($i=0;$i<$this->display->getRows();$i++)
            echo $this->display->getRowText($i);
    }
}