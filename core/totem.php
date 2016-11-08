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
    public static $classMap = array();
    public $assign;

    static public function run()
    {
        // p('ok');
        $route      = new \core\lib\route();
        $ctrlClasss = $route->ctrl;
        $action     = $route->action;
        $ctrlfile   = APP . '/ctrl/' . $ctrlClasss . 'Ctrl.php';
        //  p($ctrlfile);exit;
        $cltrlClass = '\\' . MODULE . '\ctrl\\' . $ctrlClasss . 'Ctrl';
        if (is_file($ctrlfile)) {
            include $ctrlfile;
            $ctrl = new $cltrlClass();
            $ctrl->$action();
        }else {
            throw new \Exception('找不到控制器' . $ctrlClasss);
        }
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
            $file = TOTEM . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            }else {
                return false;
            }
        }
    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file=APP.'/view/'.$file;
        if(is_file($file)){
            extract($this->assign);
            include $file;
        }
    }
}