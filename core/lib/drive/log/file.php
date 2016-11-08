<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/11/8
 * Time: 15:50
 */
//文件日志存储系统

namespace core\lib\drive\log;
use core\lib\conf;

class file{
    public $path;        //日志存储位置
    public function __construct()
    {
        $conf=conf::get('OPTION','log');
        $this->path=$conf['path'];
    }

    public function log($msg,$file='log')
    {
        /*
         * 1、确定文件位置是否存在
         *  新建目录
         * 2、写入目录
         *
         */
      //  p($this->path);
        if(!is_dir($this->path)){
            mkdir($this->path,'0777',true);
        }else{
            return file_put_contents($this->path.$file.'.php',date('Y-m-d H:i:s').' '.json_encode($msg).PHP_EOL,FILE_APPEND);
        }
    }
}