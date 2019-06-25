<?php
/* 
 * 最简单的漏洞分析
 */
$a = $_GET['a'];
eval($a);
