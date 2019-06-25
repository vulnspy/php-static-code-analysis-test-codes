<?php
/* 
 * 函数封装的漏洞分析
 */
function _doget($var){
    $c = isset($_GET[$var])?trim($_GET[$var]):'';
    //eval($c);
    return $c;
}

$code = _doget('code');
eval($code);
