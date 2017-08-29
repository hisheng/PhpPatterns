<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 16:26
 */

namespace Pattern\Iterator;

class BookShelf
{
    private $books = [];
    private $last = 0;
    
    public function add(Book $book){
        $this->books[$this->last] = $book;
        $this->last ++;
    }
    public function length()
    {
        return $this->last;
    }
    
    public function iterator()
    {
        return new BookShelfIterator($this);
    }
    
    public function getBookAtIndex($index)
    {
        return $this->books[$index];
    }
}