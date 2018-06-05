<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 26/05/2018
 * Time: 22:50
 */
namespace App;

class Autoloader{
    static function register(){
        spl_autoload_register(array(__class__,'chargeClasse'));
    }

    static function chargeClasse($className){
        $class = str_replace("\\","/",$className);
        require __DIR__. "/". $class . ".php";
    }
}