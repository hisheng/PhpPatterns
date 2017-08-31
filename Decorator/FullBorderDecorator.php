<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 10:30
 */
namespace Pattern\Decorator;
class FullBorderDecorator extends BorderDecorator
{
    public function __construct(Display $display)
    {
        parent::__construct($display);
    }
    public function getRows()
    {
        return 1 + $this->display->getRows() + 1;
    }
    public function getColumns()
    {
        return 1 + $this->getColumns() + 1;
    }
    
    public function getRowText($row)
    {
        if($row == 0)
            return "+" . $this->makeLine('-',$this->display->getColumns()) . "+";
        elseif($row == ($this->display->getRows() + 1))
            return "+" . $this->makeLine('-',$this->display->getColumns()) . "+";
        else
            return "|" + $this->display->getRowText($row - 1) + "|";
    }
    
    public function makeLine($char,$count)
    {
        $s = '';
        for ($i = 0;$i<$count;$i++)
            $s = $s.$char;
        return $s;
    }
}