<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 31/05/2018
 * Time: 13:33
 */

namespace App\controller;

use App\model\Admin;

class AdminController extends Admin
{
    public function index(){
        if(isset($_POST['titre']) && !empty($_POST['titre'])) {
            if (isset($_POST['cree'])) {
                $this->cree();
            }
        }
        $posts = $this->readAllArticles(null,"id");
        $this->affichageVue('admin',compact('posts'));
    }

    public function modererCommentaire(){
        $comment = $this->readComment($_GET['id_episode'],"signaler");
        $this->affichageVue('moderer_commentaire',compact('comment'));
    }
    public function modifier(){
        $post = $this->readOne($_GET['id_episode']);
        if(isset($_POST['envoyer'])){
            $this->modifierEpisode();
        }
        elseif(isset($_POST['supprimer'])) {
            $this->deleteEpisode();
        }
        $this->affichageVue('modifier',compact('post'));
    }

    public function affichageVue($nom_vue,$param = null){
        ob_start();
        if(!empty($param)){
            extract($param);
        }
        require '../admin/' . $nom_vue . ".php";
        $content_admin =  ob_get_clean();
        require '../app/vue/templates/defaut_admin.php';
    }

}