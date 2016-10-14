<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/12
 * Time: 15:32
 */
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    }elseif (is_null($var)) {
        var_dump(null);
    }else {
        echo'<pre>';
         print_r($var) ;
    }
}