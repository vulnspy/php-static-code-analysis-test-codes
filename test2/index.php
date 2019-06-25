<?php
/*
 * 带字符拼接的漏洞分析
 */
$a = 'test' . $_GET['code'] . "eval";
$c = $a . "test";
eval($c);
