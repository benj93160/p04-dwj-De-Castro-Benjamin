<?php

require_once "../app/Autoloader.php";
App\AutoLoader::register();

if (isset($_GET['page'])){
    $p = $_GET['page'];
}else{
    $p = "admin";
}

$controller_admin = new App\controller\AdminController();

/* ADMIN */
if($p === 'admin'){
    $controller_admin->index();
}else if ($p === 'modifier'){
    $controller_admin->modifier();
}else if($p === 'moderer_commentaire'){
    $controller_admin->modererCommentaire();
}

/* Defaut */
else{
    $controller_admin = new App\controller\AdminController();
    $controller_admin->index();
}
