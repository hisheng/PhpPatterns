<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 17:32
 */
namespace Pattern\Adapter;

class Translate
{
    public $name;
    public $english ;
    
    public function __construct($name)
    {
        if($name == '海生')
            $this->name = 'hisheng';
        elseif($name == '小明')
            $this->name = 'xiaoming';
       
        $this->english = new English($this->name);
    }
    
    public function speak()
    {
         $this->english->speak();
    }
}