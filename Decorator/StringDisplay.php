<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 10:07
 */
namespace Pattern\Decorator;

class StringDisplay implements Display
{
    private $string;
    
    public function __construct($string)
    {
        $this->string = $string;
    }
    
    public function getRows()
    {
        // TODO: Implement getRows() method.
        return 1;
    }
    
    public function getColumns()
    {
        // TODO: Implement getColumns() method.
        return strlen($this->string);
    }
    
    public function getRowText($row)
    {
        // TODO: Implement getRowText() method.
        if($row == 0)
            return $this->string;
        else
            return null;
    }
    public function show(){
        for ($i = 0;$i<$this->getRows();$i++)
            echo $this->getRowText($i);
    }
}