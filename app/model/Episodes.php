<?php
/**
 * Created by PhpStorm.
 * User: BENJI
 * Date: 03/06/2018
 * Time: 16:42
 */

namespace App;
use \PDO;

class Episodes extends DataBase
{
    /*---- Articles ----*/

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

    public function readAllLimit(){
        $req = $this->getConnect()->query("SELECT * FROM episodes ORDER BY id DESC LIMIT 3");
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

    public function insertComment(){
        $req = $this->getConnect()->prepare("INSERT INTO commentaires(id_post, pseudo, commentaire, signaler) VALUES(:id_post, :pseudo, :commentaire, 0)");
        $req->bindParam(":id_post"  , $_GET['id_post']);
        $req->bindParam(":pseudo", $_POST['pseudo']);
        $req->bindParam(":commentaire", $_POST['commentaire']);
        $req->execute();
        header('location: index.php?page=article&id_post='. $_GET['id_post'] .'#commentaire');
    }

    public function signaler($id){
        return $this->getConnect()->query("UPDATE commentaires SET signaler = 1 WHERE id = $id");
    }
}