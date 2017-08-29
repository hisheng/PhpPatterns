<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/8/29
 * Time: 16:33
 */
namespace Pattern\Iterator;
class BookShelfIterator implements \Iterator
{
    private $bookShelf;
    private $position  = 0;
    
    public function __construct(BookShelf $bookShelf) {
        $this->bookShelf = $bookShelf;
    }
    public function current()
    {
        return $this->bookShelf->getBookAtIndex($this->position);
    }
    
    public function key()
    {
        return $this->position;
    }
    
    public function next()
    {
        return $this->bookShelf->getBookAtIndex(++ $this->position);
    }
    
    public function rewind()
    {
        $this->position = 0;
        return $this->current();
    }
  
  public function valid()
  {
        try{
            return $this->bookShelf->getBookAtIndex($this->position);
        }catch (\Exception $exception)
        {
            $exception->getMessage();
        }
  }
}