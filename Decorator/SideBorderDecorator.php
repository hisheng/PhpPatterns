<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 10:20
 */
namespace Pattern\Decorator;
class SideBorderDecorator extends BorderDecorator
{
    private $borderChar;
    
    public function __construct(Display $display,$char)
    {
        parent::__construct($display);
        $this->borderChar = $char;
    }
    
    
    public function getColumns()
    {
        return 1 + $this->display->getColumns() + 1;
    }
    
    public function getRows()
    {
        return $this->display->getRows();
    }
    
    public function getRowText($row)
    {
        return $this->borderChar + $this->display->getRowText($row) + $this->borderChar;
    }
}