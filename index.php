<?php
require("app/Autoloader.php");
App\AutoLoader::register();

if (isset($_GET['page'])){
    $p = $_GET['page'];
}else{
    $p = 'accueil';
}

// Initialisation objet
require "app/model/DataBase.php";
require "app/model/Episodes.php";

$controller = new \controller\EpisodeController();
$erreur = new \controller\ErreurController();

if($p === 'accueil'){
    $controller->index();
}else if ($p === 'bio'){
    $controller->showBio();
}else if($p === 'article'){
    $controller->showArticle();
}else if($p === 'articles'){
    $controller->showAllArticles();
}else if($p === 'erreur'){
    $erreur->index($_GET['erreur']);
}

/* Defaut */
else{
    $controller = new \controller\EpisodeController();
    $controller->index();
}

?>