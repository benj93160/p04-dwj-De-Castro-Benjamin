<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 05/06/2018
 * Time: 13:54
 */

namespace App\controller;


class ErreurController
{
    public function index($erreur){
        if($erreur = "500"){
            ob_start();
            require 'app/vue/erreurs/erreur_500.php';
            $content = ob_get_clean();
            require 'app/vue/templates/defaut.php';
        }
        else if($erreur = "401"){
            ob_start();
            require 'app/vue/erreurs/erreur_401.php';
            $content = ob_get_clean();
            require 'app/vue/templates/defaut.php';
        }

    }
}