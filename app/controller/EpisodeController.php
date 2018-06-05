<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 31/05/2018
 * Time: 13:33
 */

namespace Controller;


use App\Episodes;

class EpisodeController extends Episodes
{
    public function index(){
        $posts = $this->readAllLimit();
        $this->affichageVue("accueil", compact('posts'));
    }

    public function showArticle(){
        $posts = $this->readAllLimit();
        $post = $this->readOne($_GET['id_post']);
        $comments = $this->readComment($_GET['id_post']);

        if(isset($_POST['envoyer'])){
            if( isset($_POST['pseudo'])  && !empty($_POST['pseudo']) &&  isset($_POST['commentaire']) && !empty($_POST['commentaire'])) {
                $this->insertComment();
            }else{
                $message = '<div class="toto">' . "<h5> Veuillez remplir tout les champs ! </h5>" . '</div>';
            }
        }
        $this->affichageVue("article", compact('posts','post','comments','message'));
    }

    public function showAllArticles(){
        $posts = $this->readAllArticles(null,"id");
        $this->affichageVue("articles", compact('posts'));
    }

    public function showBio(){
        $this->affichageVue("bio");
    }

    public function affichageVue($nom_vue,$param = null){
        ob_start();
        if (!empty($param)) {
            extract($param);
        }
        require 'app/vue/' . $nom_vue . ".php";
        $content = ob_get_clean();
        require 'app/vue/templates/defaut.php';
    }
}