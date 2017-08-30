<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 9:55
 */
namespace Pattern\TemplateMethod;
class Red extends Color
{
    public function __construct()
    {
        $this->name = 'Red';
    }
    
    public function print()
    {
        echo '--- '.$this->name . ' ---';
        echo "<br/>";
    }
}