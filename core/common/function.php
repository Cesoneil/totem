<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/12
 * Time: 15:32
 */
function p($var)
{
    if(is_bool($var)){
        var_dump($var);
    }elseif (is_null($var)){
        var_dump(null);
    }else{
        echo"<pre style='position:relative;z-index:1000;padding:10px ;background:#F5F5F5;'>".print_r($var)."</pre>";
    }
}