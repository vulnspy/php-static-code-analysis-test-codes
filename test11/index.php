<?php
/* 
 * 动态文件关联分析
 */
$mod = $_GET['mod'];
$code = $_GET['code'];
$filename = 'mod_'.$mod.'.php';
if(ctype_alnum($mod) && file_exists($filename)){
    require_once($filename);
}else{
    require_once('mod_index.php');
}
