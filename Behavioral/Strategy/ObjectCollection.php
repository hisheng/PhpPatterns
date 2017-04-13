<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/13
 * Time: 11:17
 */
require 'ComparatorInterface.php';




class ObjectCollection
{
    private $elements;
    
    private $comparator;
    
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }
    
    public function sort():array
    {
        if(!$this->comparator){
            throw new LogicException('compartor is not set');
        }
        
        uasort($this->elements , [$this->comparator , 'compare']);
        
        return $this->elements;
    }
    
    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}

