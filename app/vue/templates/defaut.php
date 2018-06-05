<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Mon blog</title>
</head>

<body>
<section class="container-fluid">
    <div class="row menu">
        <div class="col-lg-12">
            <ul class="nav justify-content-center">
                <li class="nav-item ">
                    <a class="nav-link active" href="<?="index.php?page=accueil"?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=articles">Episodes</a>
                </li>
            </ul>
        </div>
    </div>
    <?= $content; ?>
    <footer>
        <hr>
        <div id="copyRight">
            <div class="row bas">
                <div class="col-lg-12">
                    <p>All right reserved @Benjamin De Castro - France / Paris</p>
                </div>
            </div>
        </div>
    </footer>
</section>
<script type="text/javascript" src="./plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="./plugin/tinymce/init-tinymce.js"></script>
<script type="text/javascript" src="./public/js/animation.js"></script>
</body>
</html>