<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/12
 * Time: 13:55
 */
 
require 'StringReverseWorker.php';
class WorkerPool implements Countable
{
    private $occupiedWorkers = [];
    
    private $freeWorkers = [];
    
    public function get():StringReverseWorker
    {
        if(count($this->freeWorkers) == 0){
            $work = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
    }
    
    public function dispose(StringReverseWorker $worker){
        $key = spl_object_hash($worker);
        
        if(isset($this->occupiedWorkers[$key])){
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }
    public function count():int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}


$work1 = new WorkerPool();
var_dump($work1->get());