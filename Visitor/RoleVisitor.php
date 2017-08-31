<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 11:07
 */
namespace Pattern\Visitor;

class RoleVisitor implements RoleVisitorInterface
{
    public function AdminVisitor(Admin $admin)
    {
        echo '欢迎管理员 '.$admin->getName();
    }
    
    public function UserVisitor(User $user)
    {
        echo '用户你好'.$user->getName();;
    }
}