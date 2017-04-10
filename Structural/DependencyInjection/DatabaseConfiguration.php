<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 19:20
 */
namespace Pattern\Structural\DependencyInjection;

class DatabaseConfiguration
{
    private $host;

    private $port;

    private $username;

    private $password;

    public function __construct( $host, $port , $username ,  $password){
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function getHost(){
        return $this->host;
    }

    public function getPort(){
        return $this->port;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }
}