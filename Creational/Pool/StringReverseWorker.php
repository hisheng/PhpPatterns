<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/12
 * Time: 13:34
 */
class StringReverseWorker
{
    public $createdAt;
    
    public function __construct(){
        $this->createdAt = new DateTime();
    }
    
    public function run(string $text){
        return strrev($text);
    }
}

$a = new StringReverseWorker();
var_dump($a->run('123456'));
echo $a->createdAt->format('Y:m:d H:i:s');