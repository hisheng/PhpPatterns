<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 16:11
 */
namespace Pattern\ChainOfResponsibility;
require '../vendor/autoload.php';

$alice = new NoHandle("Alice");
$bob = new LimitHandle("Bob",100);
$charlie = new SpecialHandle("Charlie",429);
$diana = new LimitHandle("Diana",200);
$elmo = new OddHandle("Elmo");
$fred = new LimitHandle("Fred",300);

//形成职责链
$alice->setNext($bob)
    ->setNext($charlie)
    ->setNext($diana)
    ->setNext($elmo)
    ->setNext($fred);

for ($i = 0;$i < 500;$i+=3)
{
    $alice->support(new Request($i));
}



