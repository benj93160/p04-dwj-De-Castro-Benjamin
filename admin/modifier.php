
<header class="entete vertical">
    <!--<div class="opacity"></div>-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="animated flipInX">Modifier un épisode</h1>
        </div>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <div class="menu_admin">
            <?php
            foreach ($post as $item) {
                echo
                    '<tr class="modifier">' .
                    '<form  action="" method="post">' .
                    '<div class="form-group ">' .
                    '<th></th>' .
                    '<td>' .
                    '<label>Changer le titre : </label>' .
                    '<br>' .
                    '<input class="form-control" type="text" value="' . $item->titre . '" name="titre">' .
                    '</td>' .
                    '<td>' .
                    '<br>'.
                    '<label>Nouveau Contenu : </label>' .
                    '<textarea class="tinymce form-control" name="contenu">' . $item->contenu . '</textarea>' .
                    '</td>' .
                    '</br>' .
                    '<td>' .
                    '<button class="btn btn-primary btn-sm" id="envoyer" name="envoyer"  type="submit"> Valider</button>' .
                    '</td>' .
                    '<td>' .
                    '<td>' .
                    '&nbsp;'.
                    '<button class="btn btn-primary btn-sm" id="supprimer" name="supprimer" type="submit">Supprimer</button>' .
                    '</td>' .
                    '</div>' .
                    '</form>' .
                    '</tr>';
            }
            ?>
        </div>
    </div>
</div>
