<header class="entete vertical">
    <!--<div class="opacity"></div>-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="animated flipInX">Episodes </h1>
        </div>
    </div>
</header>
<div class="container-fluid ">
    <div class="row news justify-content-center">
        <?php foreach ($posts as $item) { ?>
            <div class="col-xl-3 col-lg-10 col-md-10 col-xs-8 lastNews" >
                <div class="infoBlock">
                    <h3><?= utf8_encode($item->titre); ?></h3>
                    <hr>
                    <p>Date : <?= $item->date_creation; ?></p>
                    <hr>
                    <?= substr($item->contenu,0,2200); ?>
                </div>
                <hr>
                <h5><a href="index.php?page=article&<?= "id_post=" . $item->id;?>">Voir l'article</a></h5>
                <hr>
            </div>
        <?php } ?>
    </div>
</div>