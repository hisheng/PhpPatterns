<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 15:11
 */
class Container implements ArrayAccess
{
    private $container = [];
    public function offsetExists($offset){
        return isset($this->container[$offset]) ;
    }

    public function offsetSet($offset, $value){
        if(is_null($offset)){
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetGet($offset){
        if(isset($this->container[$offset])){
            return $this->container[$offset];
        }
        return null;
    }
    public function offsetUnset($offset){

    }
}

$app = new Container();
var_dump(isset($app['route']));
var_dump($app["route"]);
var_dump($app);
$app['hi'] = 'hisheng';
$app->ss = 'ssss';
var_dump($app);
echo $app['hi'];
echo $app->ss;
var_dump($app['ss']);// null