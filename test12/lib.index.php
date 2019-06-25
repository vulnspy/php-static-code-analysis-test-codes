<?php
class index{
    function __construct($code = '') {
        if($code != false)
            eval($code);
        else
            echo "hi";
    }
}
