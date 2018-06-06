<header class="entete vertical">
    <!--<div class="opacity"></div>-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="animated flipInX">Modérer un commentaire</h1>
        </div>
    </div>
</header>

<div class="row">
    <div class="col-lg-12 commentaire">
        <hr>
        <h4>Commentaires :</h4>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Auteur</th>
                <th scope="col">Commentaire</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Signaler</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($comment as $item_commentaire) {
                if(isset($_POST['supprimer_commentaire'. $item_commentaire->id])){
                    $this->deleteCommentaire($item_commentaire->id);
                    header("location: index.php?page=moderer_commentaire&id_episode=" . $_GET['id_episode']);
                }
                ?>
                <tr>
                    <td><?= $item_commentaire->pseudo; ?></td>
                    <td><?= $item_commentaire->commentaire; ?></td>
                    <form action="" method="post">
                        <td>
                            <button name="supprimer_commentaire<?= $item_commentaire->id ?>" type="submit">Supprimer</button>
                        </td>
                    </form>
                    <td>
                        <?php
                        if($item_commentaire->signaler == 1){
                            echo 'A été signalé';
                        }else{
                            echo 'n/c';
                        }
                        ?>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>

