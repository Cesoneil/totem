<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/14
 * Time: 10:19
 */
namespace core;

class totem
{
    public static $classMap = [];

    static public function run()
    {
       // p('ok');
       $route= new \core\lib\route();
    }

    static public function autoLoad($class)
    {
        /*
         * 自动加载路由
         * new \core\route();
         * $class='\core\route';
         * TOTEM.'/core/route.php'
         */
   //     p($class);
      //  p(TOTEM .'\'. $class . '.php');  调试信息
        if (isset($classMap[$class])) {
            return true;
        }else {
            str_replace('\\', '/', $class);
            $file=TOTEM .'/'. $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            }else {
                return false;
            }
        }
    }
}