<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 27/05/2018
 * Time: 22:33
 */

namespace App;
use \PDO;

class DataBase
{
    private $db_name;
    private $username;
    private $passwd;
    private $db_host;
    private $pdo;

    public function __construct($db_name = "episodes", $username = "root", $passwd = "", $db_host = "localhost"){
        $this->db_name = $db_name;
        $this->username = $username;
        $this->passwd = $passwd;
        $this->db_host = $db_host;
    }

    protected function getConnect(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=projetsoexwp;host=projetsoexwp.mysql.db','projetsoexwp','Fantaisie93');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
}