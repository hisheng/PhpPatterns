<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 17:30
 */
namespace Pattern\Adapter;
class Chinese
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function speak()
    {
        var_dump('你好 '.$this->name);
    }
    
    public function speakEnglish()
    {
        $t = new Translate($this->name);
        $t->speak();
    }
    
}