<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 15:37
 */
class App{

}

function fireCallbackArray($object, array $callbacks){
    foreach ($callbacks as $callback) {
        $callback($object, $this);
    }
}

$s = fireCallbackArray(new App(),[1,2,3,4]);
var_dump($s);