<?php
/* 
 * 可变数量的参数分析
 */

function myexec(){
    $code = func_get_arg(1);
    system($code);
}
 
myexec($_GET['code']);
