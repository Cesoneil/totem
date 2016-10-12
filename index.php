<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/12
 * Time: 15:25
 */
/*
 * 入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

define('TOTEM',realpath(' /')); //根目录
define('CORE',TOTEM.'/core');  //核心文件
define('APP',TOTEM.'/app');

define('DEBUG',true);//开启调试模式

if(DEBUG){
    ini_set('display_error','on');
}else{
    ini_set('display_error','off');
}
include CORE.'/common/function.php';
p(TOTEM);
