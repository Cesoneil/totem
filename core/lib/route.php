<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/14
 * Time: 10:26
 */
namespace core\lib;
use core\lib;

class route
{
    public $ctrl;
    public $action;

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
      //  p($_SERVER);
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
               //   /index/index
            $path=$_SERVER['REQUEST_URI'];
            $pathArr=explode('/',trim($path,'/'));
            if(isset($pathArr[0])){
                $this->ctrl=$pathArr[0];
            }
            if(isset($pathArr[1])){
                $this->action=$pathArr[1];
            }else{
                $this->action=conf::get('ACTION','route');
            }
            // url多余部分转换成get
            // id/1/str/2/test/3/
            $count=count($pathArr);
            $i=2;
            while ($i<$count){
                if(isset($pathArr[$i+1])){
                     $_GET[$pathArr[$i]]=$pathArr[$i+1];
                }
                $i=$i+2;
            }
           // p($_GET);

        }else {
            $this->ctrl  =conf::get('CTRL','route');
            $this->action=conf::get('ACTION','route');
        }
    }
}