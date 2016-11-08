<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/11/8
 * Time: 9:56
 */
namespace core\lib;
//use core\lib\conf;
class model extends \PDO
{
    public function __construct()
    {
        //$dsn      = 'mysql:host=localhost;dbname=test';
        //$username = 'root';
        //$passwd   = 'root';
        $database=conf::all('database');
        try{
            parent::__construct($database['DSN'], $database['USERNAME'],  $database['PASSWD']);
        }catch (\PDOException $e){
            p($e->getMessage());
        }
       // parent::__construct($dsn, $username, $passwd,);
    }
}