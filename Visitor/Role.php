<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 11:10
 */
namespace Pattern\Visitor;
abstract class Role
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    
    public function accept(RoleVisitorInterface $roleVisitor)
    {
       // $visitingMethod = UserVisitor
       // call_user_func([$roleVisitor,])
    }
}