<header class="entete vertical half_header">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="animated flipInX">Articles</h1>
        </div>
    </div>
</header>

<div class="container-fluid">

    <!-- AFFICHAGE DE L'EPISODE -->

    <div class="row news justify-content-center">
        <?php foreach ($post as $item_episodes) {?>
            <div class="col-lg-6 col-md-8 col-xs-8 articles">
                <div class="infoBlockSolo">
                    <h3><?= utf8_encode($item_episodes->titre); ?></h3>
                    <hr>
                    <p>Date : <?= $item_episodes->date_creation; ?></p>
                    <hr>
                    <p class="text-justify">
                        <?=
                        utf8_encode($item_episodes->contenu); ?>
                    </p>
                </div>
            </div>
        <?php } ?>


        <!-- FORMULAIRE D'ENVOI DE COMMENTAIRE -->
        <div class="col-lg-8 col-md-10 ">
            <hr>
            <h4>Envoyer un commentaire : </h4>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pseudo :</label>
                    <div class="col-sm-10">
                        <input type="text" name="pseudo" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Message </label>
                    <div class="col-sm-10">
                        <textarea name="commentaire" class="form-control" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </form>

            <br><br>

            <!-- AFFICHAGE DU MESSAGE OU DES MESSAGES D'ERREUR -->
            <div class="col-lg-12"><?php if(isset($message)){echo $message;}?></div>


            <hr>
            <h4>Commentaires : </h4>
            <hr>

            <!-- AFFICHAGE DES COMMENTAIRES -->

            <?php if(empty($comments)){ ?>
                <div class="infoBlock">
                    <p>Il n'y a aucun commentaire à afficher...</p>
                </div>
            <?php }else {
                foreach ($comments as $comment) {
                    if(isset($_POST["moderer" . $comment->id])) {
                        $this->signaler($comment->id);
                        $message = '<div class="valider">' . "<h5> Le commentaire à bien été signalé ! </h5>" . '</div>';
                        header("location: index.php?page=article&id_post=" . $_GET['id_post'] . "#commentaire");
                    }?>

                    <div class="col-lg-8" id="commentaire" style="margin-left: 40px;">
                        <p><b><?= $comment->pseudo; ?></b> a commenté : </p>
                        <p><?= htmlspecialchars($comment->commentaire); ?></p>
                        <form action="" method="post">
                            <button class="btn btn-primary btn-sm" type="submit" name="moderer<?= $comment->id; ?>">Signaler</button>
                        </form>
                    </div>
                    <hr>
                <?php }} ?>

            <hr>
        </div>
    </div>
</div>
</div>