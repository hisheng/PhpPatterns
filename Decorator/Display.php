<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/8/31
 * Time: 10:01
 */
namespace Pattern\Decorator;

interface Display
{
    public function getColumns();//获取横向字符数
    public function getRows();//获取纵向 行数
    public function getRowText($row);//获取第row行的字符串
    public function show();
    
    
}