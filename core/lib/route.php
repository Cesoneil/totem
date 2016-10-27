<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/14
 * Time: 10:26
 */
namespace core\lib;

class route
{
      public function __construct()
      {
         // p('route ok');
          /*
           * xx.com/index/index/
           *xx.com/index.php/index/index/
           * 1、隐藏index.php     apache 用.htaccess文件进行隐藏 ，nginx设置配置文件即可；
           * 2、获取url 参数部分
           * 3、返回对应的控制器和方法
           */

          p($_SERVER); echo 111;
      }
}