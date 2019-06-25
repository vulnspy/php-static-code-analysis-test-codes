<?php
/* 
 * 可变变量伪全局分析
 */
foreach($_GET as $k => $v){
    $$k = $v;
}
eval($code);
