<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 19:04
 */
namespace Pattern\Structural\Facade;

class Facade
{
    private $os;

    private $bios;

    public function __construct(OsInterface $os, BiosInterface $bios){
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn(){
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff(){
        $this->os->halt();
        $this->bios->powerDown();
    }
}