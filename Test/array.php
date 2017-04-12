<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/11
 * Time: 15:44
 */

$data = [1,2,3,4,5,6,7,8,9];
echo current($data);
echo end($data);
echo current($data);
echo prev($data);
echo reset($data);
$data['post'] = function(){
    return 'ddddd';
};

echo call_user_func_array($data['post'],[]);