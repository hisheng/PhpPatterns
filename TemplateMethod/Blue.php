<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/30
 * Time: 9:52
 */
namespace Pattern\TemplateMethod;
class Blue extends Color
{
    public function __construct()
    {
        $this->name = 'Blue';
    }
    
    public function print()
    {
       echo '<<< '.$this->name . '>>>';
       echo "<br/>";
    }
}