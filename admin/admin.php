<header class="entete vertical">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="animated flipInX">Bienvenue dans votre administration</h1>
        </div>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <div class="menu_admin">
            <hr>
            <h4>Episodes sur le site : </h4>
            <hr>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Commentaire</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $item) {
                    echo '<tr class="infos_episode">'.
                        '<th  scope="row">' . $item->id. '</th>' .
                        '<td class="titre_tab"><h4>' . utf8_encode($item->titre). '</h4></td>'.
                        '<td class="contenu">' . substr($item->contenu,0,1900) . '</td>'.
                        '<td>'.
                        "<a href='index.php?page=modifier&id_episode=" . $item->id . "'" . "class='btn btn-primary btn-sm' >Editer</a>" .
                        '</td>'.
                        '<td>'.
                        "<a href='index.php?page=moderer_commentaire&id_episode=" . $item->id . "'" . "class='btn btn-primary btn-sm'>Modérer</a>" .
                        '</td>'.
                        '</tr>';
                }
                ?>
                </tbody>
            </table>
            <hr> <hr>
            <h4>Crée un episode : </h4>
            <hr>
            <form action="" method="post">
                <label>Titre de l'episode : </label>
                <input type="text" name="titre">
                <textarea name="contenu" class="tinymce"></textarea>
                <input type="submit" name="cree" value="Cree un episode" class='btn btn-primary btn-sm'>
            </form>
            <hr> <hr>
        </div>

    </div>
</div>