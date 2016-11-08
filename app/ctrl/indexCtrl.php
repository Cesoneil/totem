<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/11/8
 * Time: 9:30
 */
namespace app\ctrl;
 class indexCtrl extends \core\totem
 {
     public function index(){
         //p("it is index");
         $model=new \core\lib\model();
         $sql='select * from cc';
         $res=$model->query($sql);
         p($res->fetchAll());
         exit;
         $temp=\core\lib\conf::get('CTRL','route');
         $temp=\core\lib\conf::get('ACTION','route');
         p($temp);
         $data='Hello World';
         $title='这时视图文件';
         $this->assign('title',$title);
         $this->assign('data',$data);
         $this->display('index.html');
     }
 }