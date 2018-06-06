<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 05/06/2018
 * Time: 19:12
 */

namespace App\model;

use \PDO;

class Admin extends Episodes
{
    public function cree(){
        $req = $this->getConnect()->prepare("INSERT INTO episodes(titre, contenu, date_creation) VALUES (:titre, :contenu, NOW())");
        $req->bindValue(':titre', $_POST['titre']);
        $req->bindValue(':contenu', $_POST['contenu']);
        $req->execute();
        header('location: index.php?page=admin');
    }

    public function readAllArticles($id = null, $order_element = null){
        if(!empty($id) && empty($order_element)){
            $req = $this->getConnect()->query("SELECT * FROM episodes WHERE id = $id");
        }elseif(!empty($order_element) && empty($id)){
            $req = $this->getConnect()->query("SELECT * FROM episodes ORDER BY $order_element DESC");
        }
        else{
            $req = $this->getConnect()->query("SELECT * FROM episodes");
        }
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function readOne($id){
        $req = $this->getConnect()->query("SELECT * FROM episodes WHERE id = $id");
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    /*---- Commentaire ---- */

    public function readComment($id, $order = null){
        if(!empty($order)){
            $req = $this->getConnect()->query("SELECT * FROM commentaires WHERE id_post = $id ORDER BY $order DESC, id DESC" );
        }else{
            $req = $this->getConnect()->query("SELECT * FROM commentaires WHERE id_post = $id");
        }
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function modifierEpisode(){
        $req = $this->getConnect()->prepare(" UPDATE episodes SET titre = :titre , contenu = :contenu WHERE id = :id");
        $req->bindParam(":id",$_GET['id_episode']);
        $req->bindParam(":titre",$_POST['titre']);
        $req->bindParam(":contenu",$_POST['contenu']);
        $req->execute();
        header('location: index.php?page=admin');
    }

    public function deleteEpisode(){
        $this->getConnect()->query("DELETE FROM episodes WHERE id =" . $_GET['id_episode']);
        header('location: index.php?page=admin');
    }

    public function deleteCommentaire($id){
        return $this->getConnect()->query("DELETE FROM commentaires WHERE id = $id");
    }

}