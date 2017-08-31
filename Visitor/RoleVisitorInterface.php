<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 11:05
 */
namespace Pattern\Visitor;

interface RoleVisitorInterface
{
    public function AdminVisitor(Admin $admin);
    public function UserVisitor(User $user);
}