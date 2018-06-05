<header class="entete vertical">
    <!--<div class="opacity"></div>-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="animated flipInX">Bienvenue sur mon roman digital <br> "Billet simple pour l'Alaska" </h1>
        </div>
    </div>
</header>
<div class="container-fluid ">
    <hr>
    <h2 id="titleLastNews">Les derniers épisodes</h2>
    <hr>
    <div class="row news ">
        <?php foreach ($posts as $item) { ?>
            <div class="col-xl-3 col-lg-8 col-md-8 col-xs-12 lastNews">
                <div class="infoBlock">
                    <h3><?= utf8_encode($item->titre); ?></h3>
                    <hr>
                    <p>Date : <?= $item->date_creation; ?></p>
                    <hr>
                    <?= substr($item->contenu,0,2000); ?>
                </div>
                <hr>
                <h5><a href="index.php?page=article&<?= "id_post=" . $item->id;?>">Voir l'article</a></h5>
                <hr>
            </div>
        <?php } ?>
    </div>
</div>