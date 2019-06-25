<?php
/* 
 * 带有判断的漏洞分析
 */
$a = $c = isset($_GET['c'])?trim($_GET['c']):'';
if($a == 2)
    $b = $a;
else
    $b = 'echo 123;';
eval($b);
