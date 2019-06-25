<?php
/* 
 * OOP分析
 */
class FETCH{
    
    private $pre = '';
    
    function __construct($pre = '') {
        $this->pre = $pre;
    }
    
    public function _get($var){
        return $_GET[ $this->pre.$var];
    }
    
    public function _post($var){
        return $_POST[ $this->pre.$var];
    }
    
    public function _request($var){
        return $_REQUEST[ $this->pre.$var];
    }
}

class APP{
    public  $fetch = null;
    
    function __construct() {
        $this->fetch = new FETCH();
    }
    
    public function init(){
        $module = $this->fetch->_get('mod');
        $c = domod($module);
        if(isset($module))
            require_once($module); //文件包含漏洞
    }
}

function domod($c){
    if(isset($c))
        eval("\$mod='".$c."';");//代码执行漏洞
}

$app = new APP();
$r = $app->init();
?>
